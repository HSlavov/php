<?php
    echo "<pre>";
     //Създайте програма за валидиране:
/////////////////////////////////////////////////////////////////
    echo "@line: " . __LINE__ . " Validate string with only alphanumeric:\n";
    $alphaNum = "222faf";
    $delimiter = "[A-Za-z0-9_]+$";
    if(ctype_alnum($alphaNum)){
         echo "Correct: \"" .$alphaNum. "\" It`s right.\n\n\n\n";
    }else{
        echo "Error: \"" .$alphaNum. "\" is not correct. Only alphabet and numbers!\n\n\n\n" ;
    }
    
/////////////////////////////////////////////////////////////////
    echo "@line: ". __LINE__ ." Validate only float numbers: \n";
    function frand($min, $max, $decimals = 0) {
        $scale = pow(10, $decimals);
        return mt_rand($min * $scale, $max * $scale) / $scale;
    }

    $float = frand(0,10,8);
    if(preg_match("/^-?(?:\d+|\d*\.\d+)$/", $float)){
            echo "Correct: \"" . $float . "\" is float. Right!\n\n\n\n";
        }else{
            echo "Error: string \"". $float . "\" isnt float number!\n\n\n\n";
    }
    
/////////////////////////////////////////////////////////////////   
    echo "@line: ". __LINE__ ." Complex password(min 8 length; contain at least one digits; 1 uppercase letter and 1 small letter): \n";
    $pwd = 'ds1ffDfff2';

    if (preg_match("#^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$#", $pwd)){
        echo "Your password \"".$pwd."\" is strong.";
    } else {
        echo "Your password \"".$pwd."\" is not safe.";
    }
    