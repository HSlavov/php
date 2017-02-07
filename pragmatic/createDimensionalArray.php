<?php

echo "<pre>";
//2. Създайте едномерен масив, съдържащ аритметична прогресия с разлика от 4, започваща от 0
echo "@line ".__LINE__. " Create a one dimensional array containing an arithmetic progression with a difference of 4, starting from 0\n\n";

$hwArray = array();
$differentKey = 0;
for( $x = 1; $x <= 4; $x++)
{
    $hmArray[] = array($differentKey);
    $differentKey = $differentKey + 4;
}

var_dump($hmArray ). "\n";

?>