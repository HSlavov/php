<?php
    echo "<pre>";
     //
    echo "@line: " . __LINE__ . " We will create a format, for tabular output data type string\n\n";
    
    function randomGenerate() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $generete = array();  
        $alphaLength = strlen($alphabet) - 1;  
        for ($i = 0; $i < 20; $i++) {
            $n = rand(0, $alphaLength);
            $generete[] = $alphabet[$n];
        }
        $finalArray = 0;
        $randomKeys = mt_rand(1,12);
        $randomArray = array_rand($generete, $randomKeys);

        if(is_array($randomArray) || is_object($randomArray)){
            foreach ($randomArray as $finalArray){
            unset($generete[$finalArray]);
          }
        } 
        return implode($generete); 
    }
/////////////////////////////////////////////////////////////////////////
     $username = array();
     $password = array();
     
     for($x=0; $x <= 9; $x++){
        $username[] =  randomGenerate() ; 
        $password[] = randomGenerate();
     }  
    echo  "USERNAME:\t\tPASSWORD:\n" ;
    foreach (array_combine($username, $password) as $readCleanUser => $readCleanPass) {
        if( strlen($readCleanUser) <= 24){
            $countSpaces = 24 - strlen($readCleanUser);   
        }
        $spaces = ' ';
        $middle = str_repeat($spaces, $countSpaces);
        echo $readCleanUser . $middle . $readCleanPass . "\n";
}
