<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 01.11.2017
 * Time: 10:26
 */
$arr = [2,5,9,15,0,4];

foreach($arr as $value){
    if($value>3 && $value<10){
        echo $value;
    }
}