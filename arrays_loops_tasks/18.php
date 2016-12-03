<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 01.12.2016
 * Time: 22:33
 * <p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
 * выходные дни следует вывести жирным.</p>
 */

$week=array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
foreach($week as $value ){
    if ($value=='Saturday' || $value=='Sunday' ){
        echo "<B>".$value."</B></br>";
    }else{
        echo $value."</br>";
    }
}
?>
