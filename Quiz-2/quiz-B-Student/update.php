<?php
require_once 'CONFIG-DB.php';
$con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
if(mysqli_connect_errno($con)){
	die("Fail to connect to database :".mysqli_connect_error());
}

$id = $_POST['id'];
$name = $_POST['name'];
$score = $_POST['score'];
		

$query="UPDATE `swe381-2` SET `NAME`= '$name' , `SCORE`='$score' WHERE `ID`= '$id'";

mysqli_query($con,$query);

mysqli_close();

header("Location: index.php");