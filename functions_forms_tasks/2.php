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
    for ($i=0; $i<count($arr)-1; $i++){
        if(mb_strlen($arr[$i])< mb_strlen($arr[$i+1])){
            $vrem = $arr[$i];
            $arr[$i]==$arr[$i+1];
            $arr[$i+1]=$vrem;
                   }
    }
    echo "<br>",$arr[1],"<br>";
    echo "<br>",$arr[2],"<br>";
    echo "<br>",$arr[3],"<br>";

}

if (isset($_POST['msg'])){
   $comment= $_POST['a'];
   $arr= explode(" ",$comment);
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
