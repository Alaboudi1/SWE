
<?php

 class db {
   private $servername;
   private $username;
   private $password;
   private $dbname ;
   private $conn;
   
   function __construct($servername,$username,$password,$dbname){
     $this->servername = $servername;
     $this->username   = $username;
     $this->password   = $password;
     $this->dbname     = $dbname;
     $this->conn;
   }
   
   function connection(){
     try{
        $this->conn = 
          new PDO("mysql:host=$this->servername;dbname=$this->dbname"
                  ,$this->username,$this->password);
       return  $this->conn;
     }
     catch(PDOException $e){
       echo "ERRO=>".$e->getMessage();
     }
     
   }
   
   function close(){
     $this->conn= null;
   }
 }

?>