<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 30.11.2016
 * Time: 1:51
 *
 *  Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
 * проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
 * выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>
 */

$arr = array(4, 2, 5, 19, 13, 0, 10);
$e=array(2,3,4);
$res=0;
foreach ($arr as $val) {
   foreach ($e as $val2){
      if ($val2==$val){
          $res++;
      }
   }
}
if ($res>0){
    echo "Есть";
} else{
    echo "Нет";
}

?>
