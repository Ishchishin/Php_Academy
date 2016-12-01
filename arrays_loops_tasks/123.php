<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 28.11.2016
 * Time: 1:07
 * Выведите столбец четных чисел в промежутке от нуля до 100.</p>
 */


function day_oF_Week($day ){
 if ($day=1 ) {
     echo "Понедельник ";

 }
    if ($day=2 ) {
        echo "Вторник ";
 }
if ($day=3 ) {
    echo "Среда ";
 }
if ($day=4 ) {
    echo "Четверг ";
 }
if ($day=5 ) {
    echo "Пятница ";
 }
if ($day=6 ) {
    echo "Субота";
 }
if ($day=7 ) {
    echo "Воскресенье ";
 }
}
$day=7;
day_oF_Week($day);
?>