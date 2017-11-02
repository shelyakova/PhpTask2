<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 13:05
 */
$one=0;
$num=0;
while($one*10<100) {
    $one++;
    for ($i = 0; $i < 10; $i++) {
        $num++;
        $result = $one * $num;
        echo $one, '*', $num, '=', $result, '<br>';
    }
    $num=0;
    echo '<br>','<br>';
}