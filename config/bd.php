<?php 
	
	namespace App\Config;

	use PDO;
	use PDOException;

	$host = "127.0.0.1";
	$db = "agenda";
	$pass = "root";
	$user = "root";

	try{
        $conn = new PDO("mysql:dbname=agenda;host=localhost;port=3307", $user, $pass);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $error){
		var_dump($conn);
		echo "ERRO: $error";
	}
?>