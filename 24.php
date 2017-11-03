<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 14:19
 */
$num = 442158755745;
$point = 5;

$count=0;
$arr = str_split($num);
foreach($arr as $value){
    if($value == $point){
        $count++;
    }
}
echo $count;