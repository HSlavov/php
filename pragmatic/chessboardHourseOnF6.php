<?php

echo "<pre>";
//3. Създайте многомерем масив, изобразяващ шахматна дъска и поставете кона на f6
echo "@line ".__LINE__. " Create a multidimensional array, represent the chessboard and put the horse on f6 \n\n";
$alpha = 'A';
$count = 0;
$chessBoard8x8 = array();
for( $x = 0; $x < 8; $x++){
    $chessNumber = 1;
    $chessBoard8x8[] = array();
    $count++; 
    for( $y = 0; $y < 8; $y++){
        $chessBoard8x8[$x][] = $alpha."(".$x.")" . ',' . $chessNumber."(".$y.")";
        $chessNumber++;  
    }
    if($count++){
        $alpha++;
    } 
}
$chessBoard8x8[5][5] = "F(5),6(5) =>HORSE";
//var_dump($chessBoard8x8);
print_r($chessBoard8x8);


?>