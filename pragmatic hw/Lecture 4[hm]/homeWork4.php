<?php
//4. Създайте програма, която да:
//Съхранява двумерен масив в CSV file. 
//Изчита съдържанието на съхранения CSV file и го записва в друг двумерен масив
	echo "<pre>";

	$list = array (
	    array('1peter', '2david', '3cezar', '4epep'),
	    array('1sfF23', '2sf4f56', '3gasg789', '4gasaasg')
	);

	$fp = fopen('file.csv', 'w');

	foreach ($list as $fields) {
	    fputcsv($fp, $fields);
	}
	fclose($fp);


	$csv = array_map('str_getcsv', file('file.csv'));
	var_dump($list);
	echo "----------------------\n";
	var_dump($csv);