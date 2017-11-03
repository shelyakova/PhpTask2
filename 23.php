<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 14:19
 */
$num=123;
$sum=0;

$arr = str_split($num);
foreach($arr as $value){
    $sum = $sum+$value;
    $value++;
}
echo $sum;