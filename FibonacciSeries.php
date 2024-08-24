<?php
$n1 = 0;
$n2 = 1;
$n3 = 0;
$num = 0;

echo "Fibonacci series up to first 12 no.s is";
echo "\n";
echo $n1.' '.$n2.' ';

while($num < 10){
    $n3 = $n1 + $n2;
    echo $n3.' ';
    $n1 = $n2;
    $n2 = $n3;
    $num = $num + 1;
}

?>