<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 27.11.2016
 * Time: 23:24
 * Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
 * русские — в массив $ru.
 * $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 * $en = array('green', 'red','blue');
 * $ru = array('зеленый', 'красный', 'голубой');</p>
 */
$i=0;
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой') ;
foreach ($arr as $key => $val) {
    $i++ ;
    $en[$i] = $key ;
    $ru[$i] = $val ;
}
//var_dump ( $en );
//var_dump( $ru );

?>
