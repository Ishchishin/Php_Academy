<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 27.11.2016
 * Time: 20:53
 * Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
 * С помощью цикла foreach выведите эти слова в столбик.</p>
 */



$mas = array('html', 'css', 'php', 'js', 'jq');

foreach ($mas as $value){
    echo "<pre>";
       Print $value;
    echo "</pre>";
}
?>
