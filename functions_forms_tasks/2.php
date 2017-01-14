<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 15.12.2016
 * Time: 21:32
 *  Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p>
 */
function bigWorlds($arr){

    mb_internal_encoding("UTF-8");
    for ($i=0; $i<count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr)-1 ; $j++) {
            if (mb_strlen($arr[$i]) < mb_strlen($arr[$j])) {
                $vrem ="";
                $vrem = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $vrem;
            }
        }
    }

    var_dump($arr);
    echo "<br>",$arr[0],"<br>";
    echo "<br>",$arr[1],"<br>";
    echo "<br>",$arr[2],"<br>";

}

if (isset($_POST['msg'])){
   $comment= $_POST['a'];
   $arr= explode(" ",$comment);
    var_dump($arr);
    bigworlds($arr);
}



?>

<html>
   <head>
       <title> Top 3 worlds </title>
   </head>
   <body>
   <form action="" method="post" >
       Коментарий : <textarea name="a"></textarea>
       <br>
       <input name="msg" type="submit" >
       <br>
   </form>
   </body>
</html>
