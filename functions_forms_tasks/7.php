<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 10.12.2016
 * Time: 19:39
 *
 * Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 *Все добавленные комментарии выводятся над текстовым полем.
 */
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
        $comment = $_POST['coments'];
    file_put_contents("test.txt",$comment."<br>" , FILE_APPEND);
    echo $comment;
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
