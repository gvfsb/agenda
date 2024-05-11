<?php 
	
	include_once("templates/header.php");
	include_once("dao/contactDAO.php");

	$contactsDAO = new Contacts($conn);

	$contacts = $contactsDAO->findAll();

?>
    <div class="container">
		<?php if(isset($msg) && $msg != ''): ?>
			<div class="alert alert-success" role="alert">
  			<?= $msg ?>
			</div>
    	<?php endif; ?>
    	<h1>Minha agenda</h1>
		<?php if(count($contacts) > 0): ?>
      		<table class="table" id="contacts-table">
      			<thead>
      				<tr>
      					<th scope="col">#</th>
      					<th scope="col">Nome</th>
      					<th scope="col">Telefone</th>
      					<th scope="col"></th>
      				</tr>
      			</thead>
      			<tbody>
      				<?php foreach($contacts as $contact): ?>
      					<tr>
      						<td scope="row"><?= $contact["id"] ?></td>
      						<td scope="row"><?= $contact["name"] ?></td>
      						<td scope="row"><?= $contact["phone"] ?></td>
      						<td class="actions">
      							<a href="#"><i class="fas fa-eye"></i></a>
      							<a href="#"><i class="far fa-edit edit-icon"></i></a>
      							<button type="submit"><i class="fas fa-times delete-icon"></i></button>
      						</td>
      					</tr>
      				<?php endforeach; ?>
      			</tbody>
      		</table>
    	<?php else: ?>	
    		<p>Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>
    	<?php endif; ?>	
	</div>
	<i class="fas fa-eye"></i>
	<div>
		<p id="cor-um">COR AZUL</p>
		<p id="cor-dois">COR CINZA</p>
		<p id="cor-tres">COR VERDE</p>
	</div>
	<div class="box-model">
		<p>Box model</p>
	</div>
<?php 

	include_once("templates/footer.php");

?>