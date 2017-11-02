<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 13:05
 */
$arr =[4,2,5,19,13,0,10];

foreach($arr as $value){
    if($value == 2 || $value == 3 || $value == 4){
        echo 'Есть!<br>';
    }
    else {
        echo 'Нет!<br>';
    }
}