<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 27.11.2016
 * Time: 21:32
 * Дан массив с элементами 1, 20, 15, 17, 24, 35.
 * С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
 */


$mas = array( 1, 20, 15, 17, 24, 35);
$result = 0;
foreach ($mas as $value){
    $result  =$result + $value;
}

Print $result;

?>