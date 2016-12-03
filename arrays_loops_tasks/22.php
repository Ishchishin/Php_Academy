<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 03.12.2016
 * Time: 21:56
 * <p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
 * xx<br>
 * xxxx<br>
 * xxxxxx<br>
 * xxxxxxxx<br>
 * xxxxxxxxxx</p>
 */


for ($i=1; $i < 6; $i++) {
    for ($j=0; $j != $i*2; $j++) {
        echo "X";
    }
    echo "</br>";
}
?>
