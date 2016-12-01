<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 28.11.2016
 * Time: 1:30
 * Вывести таблицу умножения</p>
 */

$i=0;
for ($i=2; $i<=9; $i++ ){
    for ($j = 2; $j <= 9; $j++ ){
        echo "<pre>";
        echo $i."x".$j."=".$i*$j;
        echo "</pre>";

    }
}

?>
