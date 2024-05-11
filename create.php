<?php 
	include_once("templates/header.php");

 ?>

<h1>Página Create</h1>

<form action="config/process.php" method="POST">
	<input type="hidden" name="create" value="type">
	<div>
		<input type="text" name="name" placeholder="Digite o nome:" required>	
	</div>
	<div>
		<input type="text" name="phone" placeholder="Digite o telefone:" required>
	</div>
	<div>
		<textarea> name="observations" placeholder="Observação" required></textarea>
	</div>
	<div>
		<input type="submit" value="Enviar">
	</div>
</form>

<?php 
	include_once("templates/footer.php");
?> 