<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 04.12.2016
 * Time: 0:47
 * <p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами.</p>
 */
$arr=array();
for($i=0;$i<10;$i++){
   $arr[$i]=rand(0,20);
//    echo $arr[$i]."</br>";
}
//$arr=array(19,32,9,8,28,14,10,32,18,2);
$max= $arr[0] ;
$min= $arr[0] ;
echo "Масив до изменения ";
for($i=0;$i<10;$i++){
    echo "[ ".$arr[$i]." ]";
    if ($arr[$i]>$max ){
        $max=$arr[$i];
    }
    if ($arr[$i]<$min ){
        $min=$arr[$i];
    }
}
echo "<br>Максимальный элемент = ".$max;
echo "<br>Минимальный  элемент = ".$min."</br>";
echo "Масив после изменений ";
for($i=0;$i<10;$i++){
    if ($arr[$i] == $max ){
        $arr[$i] = $min;
    }elseif ($arr[$i] == $min ){
        $arr[$i] = $max;
    }
    echo "[ ".$arr[$i]." ]";
}
?>