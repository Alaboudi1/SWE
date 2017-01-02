  
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include "operations.php";
    include "students.php";
    include "dataBase.php";

   $id=$_POST['id'];
   $score=$_POST['score'];
   $name=$_POST['name'];
   $user = new students($id,$name,$score);
   $db = new db("mysql4.gear.host","swe381students","SWE!@#","swe381");
   $operation= new operations($db,$user);
   $operation->updateNameAndScore(); 
   
   
?>