<html xmlns="http://www.w3.org/1999/html"
      <head>
         <title></title>
      </head>
<body>
   <table>
    <tr>
        <td>
            <li><a href ="indeh.phhp?page=1">Page1</a></li>
            <li><a href ="indeh.phhp?page=2">Page2</a></li>
        </td>
    </tr>
       <tr>
           <td>
               <?php
               $page =$_gET
               ?>
           </td>
       </tr>

   </table>



<?php
$page =$_get['page'];
if ($page==1){
   echo "first page";
}elseif ($page==2){
    echo "second page";
}else {
    echo "Home page";
}
?>
    </body>
<?php
/**
 * Created by PhpStorm.
 * User: Ishchishin
 * Date: 30.11.2016
 * Time: 20:27
 */

$pages= array(
    1=> array(
        'title' => 'First',
        'content'=>' Content First Page'
    ),
    2=> array(
        'title' => 'Second',
        'content'=>' Content Second Page'

    )
)