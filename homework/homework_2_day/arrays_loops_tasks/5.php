<?php
/**
 * Created by PhpStorm.
 * User: Роман
 * Date: 12.02.2016
 * Time: 19:13
 */
$arr = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');
foreach ($arr as $key => $val) {
    echo $key . ' — зарплата ' . $val . '<br>';
}
// почему если поставить ";" foreach ($arr as $key => $val) <- здесь показывает посаледний элимент массива