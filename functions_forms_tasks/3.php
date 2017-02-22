<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 14.01.2017
 * Time: 14:56
 *3. Есть текстовый файл.
 * Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму.
 * Проверить работу на кириллических строках - найти ошибку, найти решение.</p>
 */
mb_internal_encoding("UTF-8");
include '3.html';
if ((file_exists("3.txt"))&&(!empty("3.txt"))){
    echo "<br>";
    $st = file_get_contents( "D:\\my project\\functions_forms_tasks\\3.txt",FILE_IGNORE_NEW_LINES);
    $st = preg_replace('/[^a-zA-Zа-яА-Я0-9_]/u', ' ', $st);
    $st1 = explode (" ",$st);
//    echo "<pre>";
//    print_r($st1);
//    echo "</pre>";
//    exit;
//    for($i=0;$i<=count($st1);$i++){
//        if(strlen($st1[$i])<1){
//        //$arr_test[]=$st1;
//        unset($st1[$i]);
//        }
//    }
//    echo "<pre>";
//    print_r($st1);
//    echo "</pre>";
//    exit;
    $arr=null;
    if (isset($_POST['a'])){
        $len=count($st1);
        for ($i=0; $i<=$len; $i++){
            if (!is_null($st1[$i])){
               if ((mb_strlen ($st1[$i])) == $_POST['a']) {
                   //$j++;
                   $arr[] = $st1[$i];
                   //unset($st1[$i]);
               }

            }
        }
        echo 'Удалено -'. count($arr) . ' слов/-а'.'<br>';
        echo 'Удалены слова -';
        //var_dump($arr);//exit;
        $result=implode(" ",$st1);
    }
    if (count($arr) != 0){
       file_put_contents( "D:\\my project\\functions_forms_tasks\\3.txt",$result);
    }
}
?>