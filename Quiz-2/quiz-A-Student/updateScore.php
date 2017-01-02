<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $userId = $_POST['userId'];
  $score = $_POST['score'];
  
  $con = mysqli_connect('mysql4.gear.host','swe381students','SWE#*!','swe381');
  if(mysqli_connect_errno()){
    die("Fail");
  }
    $query = "UPDATE `swe381-1` SET `SCORE` = '$score' WHERE ID = '$userId'";
    echo $query;    
    mysqli_query($con,$query);

    mysqli_close($con);

   
