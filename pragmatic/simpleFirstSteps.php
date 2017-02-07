<?php
/////////////////////////////////////////////////////////////////////////
//Нормален string литерал ( пр. 'This is a test' )
echo "1.1: Нормален string литерал ( пр. 'This is a test' )</br></br>";

// - Произволен текст в Heredoc
echo <<<EOT
1.2: Произволен текст в Heredoc</br></br>
EOT;
    
//Boolean
echo "1.3: Boolen is_bool():";
$booleanValue = true;
echo is_bool($booleanValue)."</br></br>";

//Float
echo "1.4: Float is_float():";
$float = 14.44;
echo is_float($float)."</br></br>";

//Integer
echo "1.5: Integer is_int():";
$integer = 1;
echo is_int($integer)."</br></br>";
/////////////////////////////////////////////////////////////////////////


// - Сбора на градусите на ъглите в триъгълник
echo "2.1: Сбора на градусите на ъглите в триъгълник посредством var_dump:</br>";
$a = 25;
$b = 35;
$c = 120;
var_dump($a+$b+$c) ;

// - Температура на кипене на водата при 0м надморска височина
echo "</br></br>2.2:  - Температура на кипене на водата при 0м надморска височина";
$degree = 100;
var_dump( $degree ) ;

// - Брой потребители с еднакви потребителски имена
echo "</br></br>2.3: Брой потребители с еднакви потребителски имена </br>";
$names = array('Peter', 'Adam','Peter','David','Adam','Peter','Peter');
var_dump(array_count_values($names))  . "</br>";
//////////////////////////////////////////////////////////////////////////

//3. Създайте 12 променливи.
//3.1. Нека на всяка от променливите се присвои произволна float стойност. 
//Произволната стойност трябва да е различна при всяко изпълнение на програмата. Изведете стойността на всяка една от променливите
echo "</br></br>3.1 задача:.</br></br>";

$variable1 = 1.05;
$variable2 = 2.12;
$variable3 = 3.75;
$variable4 = 4.52352;
$variable5 = 5.6235;
$variable6 = 6.36236326;
$variable7 = 7.743643;
$variable8 = 8.435235;
$variable9 = 9.523523;
$variable10 = 10.12412;
$variable11 = 11.7047043;
$variable12 = 12.52390523;
 

echo "1: ".$variable1 ."</br>";
echo "2: ".$variable2 ."</br>";
echo "3: ".$variable3 ."</br>";
echo "4: ".$variable4 ."</br>";
echo "5: ".$variable5 ."</br>";
echo "6: ".$variable6 ."</br>";
echo "7: ".$variable7 ."</br>";
echo "8: ".$variable8 ."</br>";
echo "9: ".$variable9 ."</br>";
echo "10: ".$variable10."</br>";
echo "11: ".$variable11."</br>";
echo "12: ".$variable12."</br></br>";


function frand($min,$max,$decimals =0)
{
    $scale = pow(9,$decimals);
    return mt_rand($min * $scale , $max * $scale) / $scale;
}

for($i=1; $i<=12; ++$i)
{
    echo $i.": ". frand(0,9,3)."</br>";
      
}
echo '______________________________________________</br></br></br></br>';
echo 'НО в заданието дадохте, да направим 12 променливи И ТЯХ ДА ПРОМЕНИМ, а не просто 12 числа да си вадим, поради това единствения вариант е в масив, и докато го обхождаме да променяме ключовете/променливите</br>';

$variables = array("1,34", "2,55", "3,65", "4,55",  "5,16",  "6,77",  "7,81",  "8,11",  "9,532",  "0,4214",  "1,55",  "2,41241");
 
$number = 1;

for($i=0;$i<=11;++$i)
{
    echo "Variation: $number -> ";
    echo $variables[$i] . "</br>";
    $number++;
}

echo "</br>след обработка:</br>";
$number = 1;
for($i=0;$i<=11;++$i)
{
    $delenie = frand(0,9,3);
    echo "Variation: $number -> ";
    $done = $variables[$i]+$delenie;
    echo $done ."</br>";
    $number++;
    $variables[$i] = $done;
    array_replace(array($variables[$i]), array($done));     
}




echo "</br>Проверка, четем само масива за да видим дали сме записали промените по стойностите след като сме ги променили:</br>";
$number = 1;
for($i=0;$i<=11;++$i)
{
    echo "Variation: $number -> ";
    echo $variables[$i] . "</br>";
    $number++;
}







?>