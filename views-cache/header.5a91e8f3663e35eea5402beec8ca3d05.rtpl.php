<?php if(!class_exists('Rain\Tpl')){exit;}?><!--&lt;?php

	<!--include_once(__DIR__ . '/../../config/bd.php');
	include_once(__DIR__ . "/../../config/url.php");
	include_once(__DIR__ . '/../../config/process.php');
	include_once( __DIR__ . '/../../vendor/autoload.php');

	if(!empty($_SESSION["msg"])){
	 	$msg = $_SESSION["msg"];
		$_SESSION["msg"] = "";
    }

 ?&gt;-->

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
	<link rel="stylesheet" type="text/css" href="../public/css/styles.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="/">
		    	<img src="../public/img/logo.svg" alt="Agenda">
		    </a>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="/">Home</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" href="/criar">Adicionar Contato</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</header>