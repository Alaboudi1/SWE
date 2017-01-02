
<?php


 class students{
     private $id;
     private $name;
     private $score;
     function __construct($id,$name,$score){
       $this->id=$id;
       $this->name=$name;
       $this->score=$score;
     }
   function getName(){
     return $this->name;
   }
    function getId(){
      return $this->id;
    }
   function getScore(){
     return $this->score;
   }
   
   }


?>