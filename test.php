<?php

use BcMath\Number;

$num1 = new Number('0.01');
$num2 = new Number('0,02');
$result = $num1 + $num2;

echo $result;