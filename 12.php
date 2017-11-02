<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 13:04
 */
$n=1000;
$num=0;
while($n>50){
    $n = $n/2;
    $num++;
}
echo $n, '<br>';
echo $num;