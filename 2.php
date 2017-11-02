<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 01.11.2017
 * Time: 10:26
 */
$numbs = [1, 20, 15, 17, 24, 35];
$result = 0;

foreach($numbs as $numb) {
    $result = $result + $numb;
}
echo $result;