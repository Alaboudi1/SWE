<?php


 
class operations{
  function __construct($db,$user){
    $this->db=$db;
    $this->user=$user;
  }
  
  function auth(){
    try{
     $connection = $this->db->connection();
     $statment=$connection->prepare("SELECT id FROM Login WHERE UserName = ? AND Password = ?");
     $user= $this->user->getUsername();
     $password = $this->user->getPassword();
     $statment->bindParam(1,$user);
     $statment->bindParam(2, $password);     
     $statment->execute();
     $this->db->close();
    }
    catch(PODException $e){
      echo $e->getMessage();
      $db->close();
      return;
    }
     return $statment->fetch(PDO::FETCH_NUM) != null;

  }
  
  function createUser(){
    //TODO
  }
  function removeUser(){
    //TODO
  }
  function updateUser($newUsername,$newPassword){
    //TODOO
  }
  function findUserWithUserName(){
     try{
     $connection = $this->db->connection();
     $statment=$connection->prepare("SELECT id FROM Login WHERE UserName = ?");
     $user= $this->user->getUsername();
     $statment->bindParam(1,$user);
     $statment->execute();
     $this->db->close();
    }
    catch(PODException $e){
      echo $e->getMessage();
      $db->close();
      return;
    }
     return $statment->fetch(PDO::FETCH_NUM) != null;
  }
}


?>