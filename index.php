<?php 
	
	include_once("templates/header.php");
	include_once(__DIR__.'/controllers/contact.php');
	include_once(__DIR__.'/config/bd.php');

	$contactsDAO = new Contact($conn);

	$contacts = $contactsDAO->findAll();


?>
		
    	<h1 id="main-title">Dados</h1>
		
      		<table class="table" id="contacts-table">
      			<thead>
      				<tr>
      					<th scope="col">#</th>
      					<th scope="col">Nome</th>
      					<th scope="col">Dados:</th>
      					<th scope="col"></th>
      				</tr>
      			</thead>
      			<tbody>
      				
      					<tr>
      						<td scope="row" class="col-id">01</td>
      						<td scope="row">gabriel</td>
      						<td scope="row"><?= 21312313 ?></td>
      						<td class="actions">
      							<a href="<"><i class="fas fa-eye check-icon"></i></a>
      							<a href=""><i class="far fa-edit edit-icon"></i></a>
      							<form class="delete-form" action="" method="POST">
      								<input type="hidden" name="type" value="delete" >
      								<input type="hidden" name="id" value="<?=$BASE_URL?>edit.php">
      								<button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
      							</form>
      						</td>
      					</tr>
      				
      			</tbody>
      		</table>
    	
	
<?php 
	include_once("templates/footer.php");
?>