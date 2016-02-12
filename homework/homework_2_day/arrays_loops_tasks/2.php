<?php
/**
 * Created by PhpStorm.
 * User: Роман
 * Date: 12.02.2016
 * Time: 19:13
 */
$s = 0;
$arr = array(1, 20, 15, 17, 24, 35);
foreach ($arr as $my_arr) {
    $result = $s += $my_arr;
}
echo $result;