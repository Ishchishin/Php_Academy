<html>
    <head>
       <title> load file on server</title>
    </head>

    <body>
       <form action="index.php" method="post" enctype="multipart/form-data">
          <input type="file" name="my_file">
          <input type="submit" value="Upload on server" name="send">
       </form>
    </body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 07.12.2016
 * Time: 19:38
 * load file
 */
$userFilesDir =__DIR__ .'user_files';
if (is_uploaded_file($tmpName){
    $origName = $_FILES['my_file']['name'];
    $newFileName = $userFilesDir.'/'.$origName;
    move_uploaded_file($_FILES['my_file'],$userFilesDir);
}



?>