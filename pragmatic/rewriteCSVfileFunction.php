<?php
//4. Създайте функция, която да:
//Съхранява двумерен масив в CSV file. 
//Изчита съдържанието на съхранения CSV file и го записва в друг двумерен масив
echo "<pre>";
function writeReadArrayInFile($array){
	$fp = fopen('file.csv', 'w');
	foreach ($array as $fields) {
	    fputcsv($fp, $fields);
	}
	fclose($fp);
	$csv = array_map('str_getcsv', file('file.csv'));
        var_dump($csv);
}

$arrayList = array (
    array('1peter', '2david', '3cezar', '4epep','5element'),
    array('1sfF23', '2sf4f56', '3gasg789', '4gasaasg')
);

writeReadArrayInFile($arrayList);

 