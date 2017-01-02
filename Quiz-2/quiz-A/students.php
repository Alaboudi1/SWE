
<?php


 class students{
     private $id;
     private $score;
     function __construct($id,$score){
       $this->id=$id;
       $this->score=$score;
     }
    function getId(){
      return $this->id;
    }
   function getScore(){
     return $this->score;
   }
   
   }


?>