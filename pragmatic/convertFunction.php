<?php

echo "<pre>";
//1. Създайте функция за конвертиране от чуждестранни валути към левове 
echo "@line ".__LINE__. " Create a function to convert foreign currency to BNG  \n\n";
echo "------------------";

function moneyConverter( string $format, float $amount){
    $USD =  1.54;
    $EUR =  1.95;
    $AUD =  1.34;
    switch($format){
        case 'USD': 
            echo $amount." ".$format." is ". bcmul($USD, $amount, 2)." BGN\n";
            break;
        
        case 'EUR':
            echo $amount." ".$format." is ". bcmul($EUR, $amount, 2) ." BGN\n";
            break;
        case 'AUD':
            echo $amount." ".$format." is ". bcmul($AUD, $amount, 2)." BGN\n";
            break;
        default: echo "ERROR: The currency is not one of the allowed listed values.";
     }
 };

$currency = 'AUD';
$cash = 50.434444;
echo moneyConverter($currency, $cash);
?>