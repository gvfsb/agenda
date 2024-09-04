<?php 
		
	namespace config\process;
	use App\controllers\Contato;

	session_start();

	require_once("bd.php");
	include_once("url.php");

	$id = $_POST["id"];
	$name = $_POST['name_user'];
	$phone = $_POST['data_user'];
	$observations = $_POST['observations'];

	$contact = new Contato($conn);

	$contact->setId($id);
	$contact->setName($name);
	$contact->setPhone($phone);
	$contact->setObservations($observations);

	

	if (!empty($_POST["type"]) && $_POST["type"] === "create") {

		$contact->create($contact);

		$_SESSION["msg"] = "Contato criado com sucesso.";

		header("Location: ../index.php");

	}

	if (!empty($_POST["type"]) && $_POST["type"] === "update") {

		$contact->update();

		$_SESSION["msg"] = "Contato atualizado com sucesso.";

		header("Location: ../index.php");
	}

	if (!empty($_POST["type"]) && $_POST["type"] === "delete") {

		$contact->delete();

		$_SESSION["msg"] = "Contato excluído com sucesso.";

		header("Location: ../index.php");

	}



?>