<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 14:18
 */
$index=-2;

for($i=0; $i<=10; $i++){
    $index++;
    for($num=1; $num<$i; $num++) {
        echo $index;
    }
    echo '<br>';
}