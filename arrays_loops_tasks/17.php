<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 30.11.2016
 * Time: 2:37
 * Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
 * месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>
 */

$year= array("January","February","March","April","May","June","July","August","September","October","November","December");
$month = date("m");
    foreach($year as $key=>$value ){
        if ($key+1==$month ){
        echo "<B>".$value."</B></br>";
        }else{
        echo $value."</br>";
        }
    }
//var_dump ($month);
?>
