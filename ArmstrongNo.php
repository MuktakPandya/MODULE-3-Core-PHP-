<?php
$num = readline("Enter the no: ");
$x = $num;
$total = 0;
while($x!=0){
    $rem = $x%10;
    $total = $total + $rem*$rem*$rem;
    $x = $x / 10;
}

if($total == $num){
    echo "Given is Armstrong No";
}
else{
    echo "Given is not Armstrong no";
}
?>