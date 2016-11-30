

<?php 
       session_start();
       $_SESSION["count"] =0 ;

      $email= $_POST["email"];
      $password=  hash('ripemd160',$_POST['password']);
      setcookie("email",$email, time()+60*60*24, "/");
      setcookie("password",$password, time()+60*60*24, "/");
      setcookie("authenticated","true", time()+60*60*24,"/");
      header("Location:http://swe381-alobodi1826939.codeanyapp.com/home/");

      exit;  

?>