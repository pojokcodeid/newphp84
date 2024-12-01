<?php

// contoh sebelum php 8.4
$num1 = '0.12345';
$num2 = 2;
$result = bcadd($num1, $num2);
echo $result . PHP_EOL;
var_dump(bccomp($num1, $num2) > 0); // fals

// pada php 8.4
use BcMath\Number;

$num1 = new Number('0.12345');
$num2 = new Number('2');
$result = $num1 + $num2;
echo $result . PHP_EOL;
var_dump($num1 > $num2);