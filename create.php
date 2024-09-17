<?php 

	include_once("views/includes/header.php");

 ?>

	<div class="container" id="create-contact-container">
		<?php include_once("views/includes/backbtn.html") ?>
		<h1 id="main-title">Criar contato</h1>
		<form action="config/process.php" method="POST">
			<input type="hidden" name="type" value="create">
			<div class="form-group">
				<label for="name">Nome do contato:</label>
				<input type="text" class="form-control" id="name" name="name_user" placeholder="Digite o nome:" required>	
			</div>
			<div class="form-group">
				<label for="phone">Telefone/E-mail:</label>
				<input type="text" class="form-control" id="phone" name="data_user" placeholder="Digite o telefone:" required>
			</div>
			<div class="form-group">
				<label for="phone">Observação:</label>
				<textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira observações:" rows="3" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</form>
	</div>
<?php 
	include_once("views/includes/footer.php");
?> 