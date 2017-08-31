<?php 
require_once("php/cabecalho.php"); 
require_once("banco-cliente.php");

$clientes = listaCliente($conexao);
?>
<div class="container-fluid">

	<?php
		mostraAlerta("success");
		mostraAlerta("danger");
	?>
	<h2>Listagem de Clientes</h2>

	<table class="table table-striped table-bordered">
		<tr>
			<th>Nome</th>
			<th>Cidade</th>
			<th>UF</th>
			<th>Telefone</th>
			<th>Celular</th>
			<th>Opções</th>
		</tr>
		<?php 
		foreach($clientes as $cliente) {
			?>
			<tr>
				<td><?= $cliente->nome ?></td>
				<td><?= $cliente->cidade ?></td>
				<td><?= $cliente->estado ?></td>
				<td><?= $cliente->telefone ?></td>
				<td><?= $cliente->celular ?></td>
				<td>
					<form action="clientes-deletar.php" method="post">
            			<input type="hidden" name="id" value="<?= $cliente->id ?>" />
			            <button class="btn btn-danger">Remover</button>
        			</form>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</div>

<?php include("php/rodape.php"); ?>


