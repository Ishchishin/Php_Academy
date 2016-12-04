
<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 04.12.2016
 * Time: 23:25
 * Вывести таблицу умножения с помощью двух циклов for.</p>
 */
  for ($i=2;$i<10;$i++){
      for ($j=2;$j<10;$j++){
        echo $i."x".$j."=".$i*$j."</br>";
      }
      echo("</br>");
  }