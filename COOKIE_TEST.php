
<?php
session_start();

echo __DIR__
//echo "My session_ID".session_id()
$_SESSION
if (!isset($_COOKIE['items'])){
setcookie('items',serialize(array()));
}
$items=unserialize($_COOKIE['items']);

if (!isset($_COOKIE['send'])){
    setcookie('items',);
}
if (!isset($_COOKIE['first_name'])){
    setcookie('first_name','Sergiy');
}
echo "Welcome ".$_COOKIE['first_name'];

<form action="cookie_test.php" method="post">
    <textarea name="msg"></textarea>
    <input name="send" type="submit">
</form>

/*<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 30.11.2016
 * Time: 20:43

if (!isset($_COOKIE['first_name'])){
setcookie('first_name','Sergiy');
}
echo "Welcome ".$_COOKIE['first_name'];*/