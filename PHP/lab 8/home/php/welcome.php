<?php
        $email= $_POST["email"];
        $password=  hash('ripemd160',$_POST['password']);
        if($_COOKIE["email"] == $email && $_COOKIE["password"] == $password || isset($_COOKIE['authenticated'])){
           session_start();
           setcookie("authenticated", "true" , time()+60*60*24,"/"); 
        }
        else{
             // please add your own path to the login page
            header("Location:http://swe381-alobodi1826939.codeanyapp.com/home/");
            session_destroy(); 
            exit;
    }

       
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
  <?php  echo $_SESSION["count"]; ?> times.
  <br><br>
</div> 
  
  
 
</body>

</html>
