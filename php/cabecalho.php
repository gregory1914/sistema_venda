<!DOCTYPE html>
<?php 
error_reporting(E_ALL ^ E_NOTICE);
include("mostra-alerta.php"); ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Sistema</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">Sistema</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Fornecedores
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="fornecedores-lista.php">Ver Lista</a>
						<a class="dropdown-item" href="fornecedores-formulario.php">Cadastrar</a>
					</div>
				</li>				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Produtos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="produtos-lista.php">Ver Lista</a>
						<a class="dropdown-item" href="produtos-formulario.php">Cadastrar</a>
					</div>
				</li>			
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Clientes
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="clientes-lista.php">Ver Lista</a>
						<a class="dropdown-item" href="clientes-formulario.php">Cadastrar</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Vendas
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Ver Lista</a>
						<a class="dropdown-item" href="vendas-formulario.php">Cadastrar</a>
					</div>
				</li>	
			</div>
		</div>
	</nav>

	<div class="container">
		<?php 
			mostraAlerta("success");
			mostraAlerta("danger");
		?>
	</div>