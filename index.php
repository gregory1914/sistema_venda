<?php 
require_once("php/cabecalho.php");
require_once("usuario-logica.php");
?>



<div class="container">

	<h2>Login</h2>

	<?php if(usuarioEstaLogado()) { ?>
		<p class="text-success">Você está logado como <?= usuarioLogado() ?></p>
		<a href="usuario-logout.php">Deslogar</a></p>
		<?php
	} 

	else {?>

	<form action="usuario-login.php" method="post">
		<table class="table">
			<tr>
				<td>Login</td>
				<td><input type="text" class="form-control" name="login" required></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input type="password" name="senha" class="form-control" name="text" required></td>
			</tr>
			<tr>
				<td><button type="submit" class="btn btn-primary">Login</button></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</div>

<?php include("php/rodape.php"); ?>


