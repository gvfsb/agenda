<?php 

	session_start();

	include_once("bd.php");
	include_once("url.php");
	include_once(__DIR__.'/../dao/contactDAO.php');

	$contactDAO = new Contacts($conn);

	if (!empty($_POST["type"]) && $_POST["type"] === "create") {
		
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$observations = $_POST['observations'];

		$contactDAO->create($name, $phone, $observations);

		$_SESSION["msg"] = "Contato criado com sucesso.";

		header("Location: ../index.php");

	}

	if (!empty($_POST["type"]) && $_POST["type"] === "update") {
		
		$id = $_POST["id"];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$observations = $_POST['observations'];

		$contactDAO->update($id, $name, $phone, $observations);

		$_SESSION["msg"] = "Contato atualizado com sucesso.";

		header("Location: ../index.php");


	}



?>