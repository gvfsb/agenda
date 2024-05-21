<?php 
	include_once("templates/header.php");

	$contactsDAO = new ContactDAO($conn);

	$viewContact = $contactsDAO->findBy($_GET["id"]);

 ?>

	<div class="container" id="edit-contact-container">
		<?php include_once("templates/backbtn.html") ?>
		<h1 id="main-title">Editar contato</h1>
		<form action="config/process.php" method="POST">
			<input type="hidden" name="type" value="update">
			<div class="form-group">
				<input type="hidden" name="id" value="<?= $viewContact["id"] ?>">
				<label for="name">Nome do contato:</label>
				<input type="text" class="form-control" id="name" name="name" value="<?= $viewContact["name"] ?>" placeholder="Digite o nome:" required>	
			</div>
			<div class="form-group">
				<label for="phone">Telefone:</label>
				<input type="text" class="form-control" id="phone" name="phone" value="<?= $viewContact["phone"] ?>" placeholder="Digite o telefone:" required>
			</div>
			<div class="form-group">
				<label for="phone">Observação:</label>
				<textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira observações:" rows="3" required><?= $viewContact["observations"] ?></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Editar</button>
		</form>
	</div>
<?php 
	include_once("templates/footer.php");
?> 