<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 27.11.2016
 * Time: 23:38
 *  Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
 * выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>
 */
$i=0;
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $val) {
    $i++;
   if ($arr[$i] > 3 && $arr[$i] < 10)
    {
       echo "<pre>";
       echo ($arr[$i]);
       echo "</pre>";

    }
}
?>