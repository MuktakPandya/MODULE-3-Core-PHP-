<?php

//Indexed or Numeric Arrays: Array that stores data in a variable with numeric index values.

$myarrayind = array("Cycle", "Bike", "Car", "Bolero");
echo $myarrayind[0].PHP_EOL;
echo $myarrayind[1].PHP_EOL;
echo $myarrayind[2].PHP_EOL;
echo $myarrayind[3].PHP_EOL;


//Associative Arrays: Array that stores data in a variable with a string index.

$myarrayassoc = array("Cycle" => 2, "Bike" => 5, "Car" => 9);
//Access elements of an associative array
echo $myarrayassoc["Cycle"].PHP_EOL;
echo $myarrayassoc["Bike"].PHP_EOL;
echo $myarrayassoc["Car"].PHP_EOL;

// //Multidimensional Arrays: Array that contains one or more than one arrays in a single variable.

$mymultiarray = array(
	array("Cycle" => 2, "Bike" => 5, "Car" => 9),
    array("Cycle" => 3, "Bike" => 6, "Car" => 10),
    array("Cycle" => 5, "Bike" => 8, "Car" => 12)
);
//Access elements of multidimensional array
echo "First data contains ".$mymultiarray[0]["Cycle"]." Cycle, ".$mymultiarray[0]["Bike"]." Bike, and ".$mymultiarray[0]["Car"]." Car.".PHP_EOL ;
echo "Second data contains ".$mymultiarray[1]["Cycle"]." Cycle, ".$mymultiarray[1]["Bike"]." Bike, and ".$mymultiarray[1]["Car"]." Car.".PHP_EOL;
echo "Third data contains ".$mymultiarray[2]["Cycle"]." Cycle, ".$mymultiarray[2]["Bike"]." Bike, and ".$mymultiarray[2]["Car"]." Car.".PHP_EOL;
?>

?>