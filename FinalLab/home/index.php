
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SWE381</title>
  
  
  
      <link rel="stylesheet" href="css/styles.css">

  
</head>

<body>
 <?php  
     if(isset($_COOKIE["authenticated"])){
        header("Location:http://swe381-alobodi1826939.codeanyapp.com/home/php/welcome.php");
       exit;
     }


?> 
<form method="post" action="php/welcome.php">
<div class="box">
<img class="ksu" alt="KSU_Logo"
     src= "img/KSU.png"/> 

  <h1>Login </h1>

<input type="email" name="email" placeholder="email"  class="field" required />
  
<input type="password" name="password" placeholder="password" class="field" required />
  
<input type="submit" value="Login" class="btn"/> <!-- End Btn -->

<a href="html/register.html"><div id="btn2">Sign Up</div></a> <!-- End Btn2 -->
  
</div> <!-- End Box -->
  
</form>
  
 
</body>
 
</html>
