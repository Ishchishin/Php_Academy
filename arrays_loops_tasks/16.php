<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 30.11.2016
 * Time: 2:24
 * Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
 * выведите на экран столбец элементов массива, как показано на картинке.
 * 1, 2, 3
 * 4, 5, 6
 * 7, 8, 9</p>
 */
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $val) {
    if ($val/3-round($val/3)==0){
    echo $val."</br>";
    } else {
    echo $val.", ";
    }
}
?>