<?php
// debuging coude starts here
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// debuging code ends here

       include "operations.php";
       include "user.php";
       include "dataBase.php";

       if(!isset($_COOKIE['authenticated'])){
          $email= $_POST["email"];
          $password= $_POST['password']; //hash('ripemd160',$_POST['password']);
          $user = new user($email,$password); 
          $db = new db("localhost","root","123","SWE381");
          $Authenticated= new operations($db,$user);
          if(!$Authenticated->auth()){
              header("Location:http://swe381-alobodi1826939.codeanyapp.com/home/");
              exit();
           }
        }
        setcookie("authenticated", "true" , time()+60*60*24,"/"); 
        session_start();
        $_SESSION["count"] +=1;
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SWE381</title>
  
  
         <!-- please add your own path-->

      <link rel="stylesheet" href="../css/styles.css">

  
</head>

<body>
<div class="box">
  Welcome
  <br><br>
  <a href="logout.php">Logout</a>
  <br><br>
  You have accessed this site :
  <?php  
  echo $_SESSION["count"];
  ?> times.
  <br><br>
</div> 
  
  
 
</body>

</html>
