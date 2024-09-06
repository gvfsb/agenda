<?php 
	
	use App\Controllers\Contato;

	include_once("views/includes/header.php");

	$contactsDAO = new Contato($conn);

	$viewContact = $contactsDAO->findBy($_GET["id"]);

 ?>

	<div class="container" id="edit-contact-container">
		<?php include_once("views/includes/backbtn.html") ?>
		<h1 id="main-title">Editar contato</h1>
		<form action="config/process.php" method="POST">
			<input type="hidden" name="type" value="update">
			<div class="form-group">
				<input type="hidden" name="id" value="<?= $viewContact["id"] ?>">
				<label for="name">Nome do contato:</label>
				<input type="text" class="form-control" id="name_user" name="name_user" value="<?= $viewContact["name_user"] ?>" placeholder="Digite o nome:" required>	
			</div>
			<div class="form-group">
				<label for="phone">Telefone/E-mail:</label>
				<input type="text" class="form-control" id="data_user" name="data_user" value="<?= $viewContact["data_user"] ?>" placeholder="Digite o telefone:" required>
			</div>
			<div class="form-group">
				<label for="phone">Observação:</label>
				<textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira observações:" rows="3" required><?= $viewContact["observations"] ?></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Editar</button>
		</form>
	</div>
<?php 
	include_once("views/includes/footer.php");
?> 