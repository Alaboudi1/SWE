

<?php

    include "operations.php";
    include "user.php";
    include "dataBase.php";


   $receivedUser = $_GET["usercheck"];
   $user = new user($receivedUser,"");
   $db = new db("localhost","root","123","SWE381");
   $operation= new operations($db,$user);
   $isUsed = $operation->findUserWithUserName(); 
   echo json_encode($isUsed);
   
?>