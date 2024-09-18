<?php 
	
	use App\Controllers\Contato;

	include_once("views/includes/header.php");

	$contactsDAO = new Contato($conn);

	$viewContact = $contactsDAO->findBy($_GET["id"]);

?>

	<div class="container" id="view-contact-container">
		<?php include_once("views/includes/backbtn.html") ?>
		<h1 id="main-title"><?= $viewContact["name_user"] ?></h1>
		<p class="bold">Contato: </p>
		<p><?= $viewContact["data_user"] ?></p>
		<p class="bold">Observações: </p>
		<p><?= $viewContact["observations"] ?></p>
	</div>

<?php 
	include_once("views/includes/footer.php");
?>