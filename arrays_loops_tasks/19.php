<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 03.12.2016
 * Time: 21:12
 * <p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
 * текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>
 */

$week=array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
$day='Saturday';
foreach($week as $value ){
    if ($value==$day ){
        echo "<B>".$value."</B></br>";
    }else{
        echo $value."</br>";
    }
}
?>
