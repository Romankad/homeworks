<?php
/**
 * Created by PhpStorm.
 * User: Роман
 * Date: 10.02.2016
 * Time: 12:41
 */

$a = 5;
$b = 6;
$operator = "+";
switch ($operator) {
    case "+" : $calc = $a + $b; echo "$calc";break;
    case "-" : $calc = $a - $b; echo "$calc";break;
    case "/" : $calc = $a / $b; echo "$calc";break;
    case "*" : $calc = $a * $b; echo "$calc";break;
    case "%" : $calc = $a % $b; echo "$calc";break;
}
