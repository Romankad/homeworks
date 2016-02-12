<?php
/**
 * Created by PhpStorm.
 * User: Роман
 * Date: 09.02.2016
 * Time: 22:13
 */
// 8
$age = "-22";
if ($age >= 18 && $age <= 59){
    echo "Вам еще работать и работать </br>";
}
elseif ($age > 60) {
    echo "Вам пора на пенсию </br>";
}
elseif ($age > 0 && $age <= 17 ) {
    echo "Вам еще рано работать</br>";
}
elseif ($age < 0 && $age = 0) {
    echo "Неизвестный возраст</br>";
}