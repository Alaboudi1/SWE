

<?php
 class user{
     private $userName;
     private $password;
     function __construct($username,$password){
       $this->userName=$username;
       $this->password=$password;
     }
    function getPassword(){
      return $this->password;
    }
   function getUserName(){
     return $this->userName;
   }
   
   }


?>