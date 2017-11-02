<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 01.11.2017
 * Time: 10:26
 */
$arr = [
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
];

foreach($arr as $item => $key) {
    echo $key, '<br>';
}

echo '<br>';

foreach($arr as $item => $key) {
    echo $item, '<br>';
}

