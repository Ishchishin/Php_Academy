<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 27.11.2016
 * Time: 23:59
 * Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
 * '­1­2­3­4­5­6­7­8­9­'
 */

$i=0;
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $val) {
    echo "-". $arr[$i];
    $i=$i + 1;

}
?>