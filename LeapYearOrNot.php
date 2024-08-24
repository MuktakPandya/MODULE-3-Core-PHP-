<?php
$year = 0;
for($year=1991;$year<2021;$year++){
    if(($year % 400 == 0) || ($year % 100 != 0) && ($year % 4 == 0)){
        echo $year." It is Leap year".PHP_EOL;
    }
    else{
        echo $year." It is not Leap year".PHP_EOL;
    }
}

?>