<?php

echo "<pre>";
//1. Създайте програма за конвертиране от чуждестранни валути към левове
echo "@line ".__LINE__. " Create a program to convert foreign currency to BNG  \n\n";

$USD = 1.54;
$EUR = 1.95;
$AUD = 1.34;

$currency  = 'AUD';
$amount = 1;

    switch($amount){
        case 1: 
            if($currency == 'USD'){
                $amount = $amount * $USD;
                echo "\nBGN = " . $amount;
                break;
            }
        case 2:
            if($currency == 'EUR'){
                $amount = $amount * $EUR;
                echo "\nBGN = " . $amount;
                break;
            }
        case 3:
            if($currency == 'AUD'){
                $amount = $amount * $AUD;
                echo "\nBGN = " . $amount;
                break;
            }
        default: echo "ERROR: The currency is not one of the allowed listed values.";
     }

?>