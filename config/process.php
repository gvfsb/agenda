<?php 

	session_start();

	include_once("bd.php");
	include_once("url.php");
	include_once(__DIR__.'/../dao/contactDAO.php');

	if (!empty($_POST["form-login"])) {
		$_SESSION["msg"] = "Conectado com sucesso.";
		header("Location: ../index.php");	
	}

	if (!empty($_POST["create"])) {
		
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$observation = $_POST['observations'];

		$contactDAO = new Contacts($conn);

		$contactDAO->create($name, $phone, $observation);

		$_SESSION["msg"] = "Contato criado com sucesso.";

		header("Location: ../index.php");

	}



?>