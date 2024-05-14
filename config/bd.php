<?php 

	$host = "localhost";
	$db = "agenda";
	$pass = "";
	$user = "root";

	try{
		$conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $error){
		echo "ERRO: $error";
	}
?>