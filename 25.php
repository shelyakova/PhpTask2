<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 14:19
 */
$arr = [
    rand(),
    rand(),
    rand(),
    rand(),
    rand(),
    rand(),
];

var_dump($arr);
echo '<br>';

echo 'max:', max($arr), '<br>';
echo 'min:', min($arr), '<br>';

$min = min($arr);
echo $min, '<br>';
$max = max($arr);
echo $max, '<br>';

$key_min = array_search($min, $arr);
$key_max = array_search($max, $arr);

$arr[$key_min] = $max;
$arr[$key_max] = $min;

var_dump($arr);