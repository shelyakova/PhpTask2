<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 13:05
 */
$year = [
    'понедельник',
    'вторник',
    'среда',
    'четверг',
    'пятница',
    'суббота',
    'воскресенье',
];
$day ='четверг';

foreach($year as $value){
    if($value == $day){
        echo '<b>', $value, '</b>', '<br>';
    }
    else{
        echo $value, '<br>';
    }
}