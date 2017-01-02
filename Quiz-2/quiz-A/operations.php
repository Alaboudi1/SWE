<?php


 
class operations{
  function __construct($db,$user){
    $this->db=$db;
    $this->user=$user;
  }
  
  
  function updateScore(){
     $connection = $this->db->connection();
     $statment=$connection->prepare("UPDATE `swe381-1` SET `SCORE`=?  WHERE ID= ?");
     $Score= $this->user->getScore();
     $Id = $this->user->getId();
     $statment->bindParam(1,$Score);
     $statment->bindParam(2, $Id);     
     $statment->execute();
     $this->db->close();
  }
  
}


?>