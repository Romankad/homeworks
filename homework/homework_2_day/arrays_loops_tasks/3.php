<?php
/**
 * Created by PhpStorm.
 * User: Роман
 * Date: 12.02.2016
 * Time: 19:13
 */
$s = 0;
$arr = array(26, 17, 136, 12, 79, 15);
foreach ($arr as $my_arr) {
    $result = $s += ($my_arr * $my_arr);
}
echo $result;