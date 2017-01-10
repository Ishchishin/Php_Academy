<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 11.12.2016
 * Time: 18:10
 * Создать форму с двумя элементами textarea.
 * При отправке формы скрипт должен выдавать только те слова,
 * которые есть и в первом и во втором поле ввода.
 * Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
 * которая будет возвращать массив с общими словами.
 */
function getCommonWords($a, $b){

   if (($_POST['a'])== ($_POST['b'])){
        $comment = $_POST['a'];
        file_put_contents("test.txt",$comment."<br>" , FILE_APPEND);
        $comment=file_get_contents("test.txt",true);
        echo $comment;
    }else{
       $comment = file_get_contents("test.txt",true);
       echo $comment;
        echo 'Нет   совпадений';
    }
}


//if ((file_exists("test.txt"))&&(!empty("test.txt"))){
//    echo "<br>";
//    $put =file_get_contents("test.txt",true);
//    echo $put;
//    echo "<br>";
//}

if (isset($_POST['msg'])){
    if ((empty($_POST['a']))||(empty($_POST['b'])) ){
        $comment = file_get_contents("test.txt",true);
        echo $comment;
        echo "<B> Achtung!!! Achtung!!!</B> заполните коментарий";
    }else{
        $a=$_POST['a'];
        $b=$_POST['b'];
        getCommonWords($a,$b);
    }
}
?>



<html>
<head>
    <title> questbook</title>
</head>

<body>
<form action="" method="post" >
    Комент А : <textarea name="a"></textarea>
    Комент B : <textarea name="b"></textarea>
    <br>
    <input name="msg" type="submit" >
    <br>
</form>
</body>
</html>
