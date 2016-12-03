<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 03.12.2016
 * Time: 21:20
 * <p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
 * рядов, а не 5.<br><br>
 * x<br>
 * xx<br>
 * xxx<br>
 * xxxx<br>
 * xxxxx</p>
*/

for ($i=1; $i < 21; $i++) {
   for ($j=0; $j != $i; $j++) {
      echo "X";
   }
   echo "</br>";
}
?>
