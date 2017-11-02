<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 13:05
 */
$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach($arr as $value) {
    if($value == 3){
        echo '3 4, ';
    }
    elseif($value == 6){
        echo '6 7, ';
    }
    elseif($value == 4){
        echo '';
    }
    elseif($value == 7){
        echo '';
    }
    else{
        echo $value, ', ';
    }
}