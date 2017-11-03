<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 14:19
 */
$one=0;
$num=0;
for($k=0, $k = $one*10; $k <10; $k++) {
    $one++;
    for ($i = 0; $i < 10; $i++) {
        $num++;
        $result = $one * $num;
        echo $one, '*', $num, '=', $result, '<br>';
    }
    $num=0;
    echo '<br>','<br>';
}