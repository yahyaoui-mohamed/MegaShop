<?php 

$dsn  = "mysql:host=localhost;dbname=''"; 
$user = "root"; 
$pass = "";


try
{
	$conn = new PDO($dsn,$user,$pass);
}

catch(PDOException $e)
{
	echo "Not conncted" . $e->getMessage();
}



?>