<?php

/**
 * Logs in the user, if the provided credentials are correct
 * 
 * @param type $username the username
 * @param type $password the password
 * @return boolean true on success false on fail
 */
function login($username, $password) {

	include __DIR__ . '/credentials.php';
	
	foreach($users as $currentUser) {
		
		if ( 
			$currentUser['username'] == $username 
			&& $currentUser['pass'] == $password 
		) {
			
			$_SESSION['username'] = $username;
			return true;
		}
		
	}
	
	return false;
	
}

function checkLogin() {
	return isset($_SESSION['username']);
}

function logout() {
	session_destroy();
	session_write_close();
}

function getCurrentUser() {
	if (isset($_SESSION['username'])) {
		return $_SESSION['username'];
	} else {
		return null;
	}
}

function redirect($url) {
	header("Location: $url");
	exit();
}

function showPagination( $currentPage, $pages, $lastPage ) {
	include __DIR__.'/partials/pagination.php';
}

function connect() {
	global $dbLink;
	
	if ( !isset($dbLink) ) {
		require __DIR__.'/config.php';
		$dbLink = mysqli_connect($host, $username, $pass, $dbName);
		
		if ( empty($dbLink) ) {
			echo "Error: cannot connect to $host $dbName";
			exit();
		}
		
		mysqli_set_charset($dbLink, 'UTF8');
	}
	
	return $dbLink;
}

function query($query) {
	$result = mysqli_query(connect(), $query);
	$lastError = mysqli_error(connect());
	if( $lastError ) {
		echo "MySQL Error: ".$lastError.". Query: $query";
	}
	return $result;
}

function escape( $value, $quote = "'" ) {
	return $quote.mysqli_real_escape_string(connect(),$value).$quote;
}

function fetchMany($result, $indexColumn = 'id') {
	$results = [];
	while ( $row = fetchOne($result) ) {
		if ( $indexColumn == null ) {
			$results[] = $row;
		} else {
			$results[$row[$indexColumn]] = $row;
		}
		
	}
	return $results;
}

function fetchOne($result) {
	return mysqli_fetch_assoc($result);
}

function create($table, $data) {
	
}

function selectById($table, $id, $relations = []) {
	$result = listItems($table, 1, 1, $relations, '`id` = '.(int)$id);
	if ( !empty($result) ) {
		return current($result['results']);
	} else {
		return [];
	}
	
}

/**
 * Lists items from the databse
 * 
 * @param type $table the name of the table
 * @param type $page the current page
 * @param type $ipp desired items per page
 * @param array $relations an array, containing definitions Example:
<pre>
[
	'user' => [
		'type' => '1toM',
		'left_column' => 'user_id',
		'right_column' => 'id',
		'join' => 'INNER',
		'columns' => [
			'id' => 'user_id',
			'first_name' => 'first_name',
			'last_name' => 'last_name',
			'email' => 'email',
			'address' => 'address'
		]
	],
	'product' => [
		'type' => 'MtoM',
		'through' => [
			'table'=>'order_has_product',
			'left_column' => 'order_id',
			'right_column' => 'product_id',
			'join' => 'LEFT',
			'columns' => [
				'qty' => 'qty',
			]
		],
		'left_column' => 'id',
		'right_column' => 'id',
		'join' => 'LEFT',
		'columns' => [
			'id' => 'id',
			'name' => 'product_name',
			'price' => 'price'
		]
	],
]
</pre>
 * @return type
 */
function listItems($table, $page, $ipp, array $relations = [], $where = '') {		
	$page = max(1, (int)$page);
	$offset = ($page - 1) * $ipp;

	if ( $where != '' ) {
		$where = 'WHERE '.$where;
	}
	
	$relationalQueries = compileRelationStatements($table, $relations);
	
	$query = "SELECT SQL_CALC_FOUND_ROWS `$table`.* {$relationalQueries['columns']}  FROM `$table` {$relationalQueries['joinClause']} $where LIMIT $offset,$ipp";
		
	$results = fetchMany( query($query) );
	
	$allResults = fetchOne( query('SELECT FOUND_ROWS() AS `cnt`') ) ;
	$allPages = max(ceil( $allResults['cnt'] / $ipp ), 1);
	
	$ids = array_keys($results);
	
	foreach ($relationalQueries['additionalQueries'] as $additionalQuery) {
		$additionalResults = fetchMany( query(sprintf($additionalQuery['query'], implode(',',$ids))), null );
		$column = $additionalQuery['relationColumn'];
		$keyName = $additionalQuery['relationName'];
		foreach ( $additionalResults as $additionalResult ) {
			$parentId = $additionalResult[$column];
			$results[$parentId][$keyName][] = $additionalResult;
		}
	}
	
	return [
		'results' => $results,
		'pagination' => [
			'firstPage'	=> 1,
			'lastPage'	=> $allPages,
			'pages'		=> range(1, $allPages)
		]
		
	];
}

function compileRelationStatements($table, array $relations = []) {
	$query = '';
	$additionalQueries = [];
	$columns = '';
	foreach ( $relations as $tableName => $relationDefinition ) {
		switch ($relationDefinition['type']) {
			case '1toM':
				$query.=" {$relationDefinition['join']} JOIN `{$tableName}` "
				. "ON "
				. "`$table`.`{$relationDefinition['left_column']}` = "
				. "`$tableName`.`{$relationDefinition['right_column']}`";
				foreach ( $relationDefinition['columns'] as $origin => $alias ) {
					$columns.= " ,`$tableName`.`$origin` as `$alias`";
				}
				break;
			case 'MtoM':
				$additionalColumns = [];
				foreach ( $relationDefinition['columns'] as $origin => $alias ) {
					$additionalColumns[] = "`$tableName`.`$origin` as `$alias`";
				}
				$relationDefinition['through']['columns'][$relationDefinition['through']['left_column']] = $relationDefinition['through']['left_column'];
				foreach ( $relationDefinition['through']['columns'] as $origin => $alias ) {
					$additionalColumns[] = "`{$relationDefinition['through']['table']}`.`$origin` as `$alias`";
				}
				$additionalQueries[] = [
					'query' => "SELECT ".implode(',',$additionalColumns)." FROM `$tableName` 
				{$relationDefinition['join']} JOIN `{$relationDefinition['through']['table']}` 
				ON `$tableName`.`{$relationDefinition['left_column']}` = `{$relationDefinition['through']['table']}`.`{$relationDefinition['through']['right_column']}`
				WHERE `{$relationDefinition['through']['left_column']}` IN (%s)",
					'relationColumn' => $relationDefinition['through']['left_column'],
					'relationName' => $tableName
					];
				break;
			default:
				return false;
				
		}
	}
	
	return [
		'joinClause'		=> $query,
		'columns'			=> $columns,
		'additionalQueries' => $additionalQueries
	];
}

function update($table, $data, $id) {
	if ( isset($data['id']) ) {
		unset($data['id']);
	}
	$query = "UPDATE `$table` SET %s WHERE id = ".(int)$id." LIMIT 1";
	$sets = [];
	foreach ( $data as $name=>$value ) {
		$name = escape($name, '`');
		$value = escape($value);
		$sets[] = "$name = $value";
	}
	
	$query = sprintf($query, implode(',', $sets));
	return query($query);
}

function delete($table, $id) {
	$query = "DELETE FROM `$table` WHERE id = $id LIMIT 1";
	query($query);
}

function search($table, $searchString, $columns) {
	
}