<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 01.11.2017
 * Time: 10:26
 */
$arr =[
    '200' => 'Kolya',
    '300' => 'Vasya',
    '400' => 'Petya'
];

foreach($arr as $sallary => $name){
    echo $name, ' have a sallary = ', $sallary, ' dollars. <br>';
}