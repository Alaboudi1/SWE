
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include "operations.php";//.5 
    include "students.php";//
    include "dataBase.php";//

   $id=$_POST['id'];        //
   $score=$_POST['score']; //
   $user = new students($id,$score);
   $db = new db("mysql4.gear.host","swe381students","SWE#*!","swe381"); // .5
   $operation= new operations($db,$user);  // 1 score
   $operation->updateScore();              // 
   
   
?>