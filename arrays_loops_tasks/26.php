<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 04.12.2016
 * Time: 20:45
 * <p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
 * Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
 * индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
 * индекс.</p>
 */
$arr=array();

echo "Масив  ";
for($i=0;$i<10;$i++) {
    $arr[$i] = rand(0, 100);
    echo " [ " . $arr[$i] . " ] ";
}
//$arr=array(19,32,9,8,28,14,10,32,18,2);
$buf= array();
$i= 0 ;
$pr=1;
foreach($arr as $key => $value){
    if ($key>0 && $key%2==0 ){
        $pr=$pr*$value;
    }
    elseif ($value>0 && $key%2!=0 ){
        $buf[$i]=$value;
        $i++;
    }
}
    echo "<br>";
    echo "Сумма произведений парных ключей = ".$pr."<br>";
echo "Масив значений непарных ключей ";
foreach($buf as $key => $value) {
    echo " [ ".$value." ] ";
}

?>