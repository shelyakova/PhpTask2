<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 01.11.2017
 * Time: 10:26
 */
$numbs = [26, 17, 136, 12, 79, 15];
$result = 0;

foreach($numbs as $numb) {
    $result = $result + $numb*$numb;
}
echo $result;