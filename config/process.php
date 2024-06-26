<?php 

	session_start();

	include_once("bd.php");
	include_once("url.php");
	include_once(__DIR__.'/../dao/contactDAO.php');

	$contactDAO = new ContactDAO($conn);

	$id = $_POST["id"];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$observations = $_POST['observations'];

	$contact = new Contact();

	$contact->setId($id);
	$contact->setName($name);
	$contact->setPhone($phone);
	$contact->setObservations($observations);

	if (!empty($_POST["type"]) && $_POST["type"] === "create") {

		$contactDAO->create($contact);

		$_SESSION["msg"] = "Contato criado com sucesso.";

		header("Location: ../index.php");

	}

	if (!empty($_POST["type"]) && $_POST["type"] === "update") {

		$contactDAO->update($contact);

		$_SESSION["msg"] = "Contato atualizado com sucesso.";

		header("Location: ../index.php");
	}

	if (!empty($_POST["type"]) && $_POST["type"] === "delete") {

		$contactDAO->delete($contact);

		$_SESSION["msg"] = "Contato excluído com sucesso.";

		header("Location: ../index.php");

	}



?>