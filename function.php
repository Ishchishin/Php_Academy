<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 30.11.2016
 * Time: 19:34
 */

/*function Welcome($str,$str1=array(1,23,32,14)){    /*Передача по значению
    echo($str);
    $a=16;
    $b=4;
    return($a+$b);
}
Welcome(12)*/
/*$a=1;
function Welcome($b){
$a=7;
    echo $a;
    $a=$a+5;
}

Welcome($a);
echo "</br>";
echo $a;*/

/*$a=1;
function Welcome(&$b){ /*Передача по ссылке
    $a=7;
    echo $a;
    $b=$b+5;
}

Welcome($a);
echo $a;
?>*/

/*$a=1;
$b=1;
$c=1;
function Welcome(&$myvar){
   global $a,$b;    //  зачитка внешних переменных 1 вариант
    echo $a+$b;


 //   echo $GLOBALS['a']+$GLOBALS['b'];   ///2 вариант

}

Welcome($a,$b);
?>*/


/*define ('PI',3,14);
echo "Number PI:".PI;

echo "</br>";
$a=2;
$b=7;

Function welcome(){

    var_dump(func_num_args());
    $args =func_num_args();
    print_r ($args);
}

welcome($a,$b,'C');
welcome($a);
welcome($b);
welcome();*/