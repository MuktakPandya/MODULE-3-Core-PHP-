<?php
$a = '1';
$b = &$a;
$b = "2$b";
echo $a.PHP_EOL;
echo $b.PHP_EOL;

?>