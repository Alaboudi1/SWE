<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
class operations{
  function __construct($db,$user){
    $this->db=$db;
    $this->user=$user;
  }
 
  function updateNameAndScore(){
     try{
     $connection = $this->db->connection();
     $statment=$connection->prepare("UPDATE `swe381-2` SET `NAME`=? , `SCORE`=?  WHERE ID= ?");
     $Name=$this->user->getName();
     $Score= $this->user->getScore();
     $Id = $this->user->getId();
     $statment->bindParam(1,$Name);
     $statment->bindParam(2,$Score);
     $statment->bindParam(3, $Id);     
     $statment->execute();
     $this->db->close();
     }
    catch(PODException $e){
      echo $e->getMessage();
      $db->close();
      return;
    }
  }
}


?>