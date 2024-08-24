<?php
$day = readline("Enter day of week: ");
switch($day){
    case 'Sunday':
        echo "It is day 1";
        break;
    case 'Monday':
        echo "It is day 2";
        break;
    case 'Tuesday':
        echo "It is day 3";
        break;
    case 'Wednesday':
        echo "It is day 4";
        break;
    case 'Thursday':
        echo "It is day 5";
        break;
    case 'Friday':
        echo "It is day 6";
        break;
    case 'Saturday':
        echo "It is day 7";
        break;
    default:
        echo "Enter correct value";
        break;    
}

?>