<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 11.12.2016
 * Time: 18:16
 * Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
 * Реализовать проверку на наличие в тексте запрещенных слов, матов.
 * При наличии таких слов - выводить сообщение "Некорректный комментарий".
 * Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</p>
 */

$cens=array("shit","Shit","bitch","Bitch","fuck");
if ((file_exists("test.txt"))&&(!empty("test.txt"))){
    echo "<br>";
    $put =file_get_contents("test.txt",true);
    echo $put;
    echo "<br>";
}

if (isset($_POST['msg'])){
    if (empty($_POST['coments']) ){
        echo "Achtung!!! Achtung!!! заполните коментарий";
    }else{
        foreach ($cens as $value){
            if (strpos($_POST['coments'], $value)===true){
                echo "Некорректный комментарий";
                $pos = strpos($_POST['coments'], $value);
                echo "---".$pos;
                break;
            }
        }
        if ($pos === false){
            $comment = $_POST['coments'];
            file_put_contents("test.txt",$comment."<br>" , FILE_APPEND);
            echo $comment;

        }

    }
}
?>



<html>
<head>
    <title> questbook</title>
</head>

<body>
<form action="" method="post" >
    <textarea name="coments"></textarea>
    <br>
    <input name="msg" type="submit" >
    <br>
</form>
</body>
</html>
