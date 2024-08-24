<?php
$Physics = readline("Enter Marks for Physics: ");
$Chemistry = readline("Enter Marks for Chemistry: ");
$Biology = readline("Enter Marks for Biology: ");
$Mathematics = readline("Enter Marks for Mathematics: ");
$Computer = readline("Enter Marks for Computer: ");

$Total = 0;
$Percentage = 0;
$Grade = 0;

$Total = $Physics + $Chemistry + $Biology + $Mathematics + $Computer;
$Percentage = ($Total*100)/500;

if($Percentage > 90){
    echo "grade A";
}
else if($Percentage > 80){
    echo "grade B";
}
else if($Percentage > 70){
    echo "grade C";
}
else if($Percentage > 60){
    echo "grade D";
}
else if($Percentage > 50){
    echo "grade E";
}
else if($Percentage <= 50){
    echo "grade F";
}


?>