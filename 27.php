<?php
/**
 * Created by PhpStorm.
 * User: Даша
 * Date: 02.11.2017
 * Time: 14:19
 */
$row=5;
$cols=5;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
//$rand_colors = array_rand($colors, 2);
echo $colors;
echo '<table border="1">';
for($i=0; $i<$row; $i++){
    echo '<tr>';
    for($k=0; $k<$cols; $k++){
        echo "<td bgcolor='".$colors[array_rand($colors)]."'>". rand(). "</td>";
    }
    echo'</tr>';
 }


