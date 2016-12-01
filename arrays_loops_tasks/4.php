<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 27.11.2016
 * Time: 22:17
 * Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
 * помощью второго — столбец элементов.</p>
 * $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой')
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $val) {
    echo "<pre>";
    Print $key;
    echo "</pre>";
}
foreach ($arr as $key => $val) {
    echo "<pre>";
    Print $val;
    echo "</pre>";
}
foreach ($arr as $key => $val) {
    echo "<pre>";
    Print "  $key $val";
    echo "</pre>";
}



?>