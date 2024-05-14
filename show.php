<?php 
	
	include_once("templates/header.php");
	include_once("dao/contactDAO.php");

	$contactsDAO = new Contacts($conn);

	$viewContact = $contactsDAO->findBy($_GET["id"]);

?>

	<div class="container" id="view-contact-container">
		<?php include_once("templates/backbtn.html") ?>
		<h1 id="main-title"><?= $viewContact["name"] ?></h1>
		<p class="bold">Telefone: </p>
		<p><?= $viewContact["phone"] ?></p>
		<p class="bold">Observações: </p>
		<p><?= $viewContact["observations"] ?></p>
	</div>

<?php 
	include_once("templates/footer.php");
?>