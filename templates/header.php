<?php

	include_once("config/process.php");
	include_once("config/url.php");

	if(!empty($_SESSION["msg"])){
		$msg = $_SESSION["msg"];
		$_SESSION["msg"] = "";
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agenda</title>
	<!-- BOOTSTRAP -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
		    	<img src="img/logo.svg" alt="Agenda">
		    </a>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="<?= $BASE_URL ?>index.php">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" href="<?= $BASE_URL ?>create.php">Adicionar Contato</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</header>