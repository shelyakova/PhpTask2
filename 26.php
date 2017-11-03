<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 14:19
 */
$arr = [
    rand(1,100),
    rand(1,100),
    rand(1,100),
    rand(1,100),
    rand(1,100),
    rand(1,100),
];
var_dump($arr);
echo '<br>';

$mult=0;
foreach($arr as $value){
    if($value>0 && $value%2 == 0){
        $num = str_split($value);
        foreach($num as $index){
            $mult = $mult*$index;
            $index++;
        }
        echo $mult, '<br>';
        $mult=0;
    }
}

echo '<br>';

foreach($arr as $value) {
    if ($value > 0 && $value % 2 !== 0) {
        echo $value, '<br>';
    }
}