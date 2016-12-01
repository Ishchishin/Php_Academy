<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 27.11.2016
 * Time: 22:13
 * Дан массив с элементами 26, 17, 136, 12, 79, 15.
 * С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.
 */



$mas = array( 26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($mas as $value){
    $result  =$result + $value * $value;
}

Print $result;

?>