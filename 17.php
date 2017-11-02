<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 13:05
 */
$year = [
    'січень',
    'лютий',
    'березень',
    'квітень',
    'травень',
    'червень',
    'липень',
    'серпень',
    'вересень',
    'жовтень',
    'листопад',
    'грудень'
];
$month ='листопад';

foreach($year as $value){
    if($value == $month){
        echo '<b>', $value, '</b>', '<br>';
    }
    else{
        echo $value, '<br>';
    }
}