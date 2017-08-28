<?php include("php/cabecalho.php"); 
include("conecta.php");
include("banco-cliente.php");
?>
<?php
$clientes = listaCliente($conexao);
?>
<div class="container-fluid">

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>

	<p class="alert-success">Cliente apagado com sucesso.</p>

<?php } ?>
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
				<td><?= $cliente['nome'] ?></td>
				<td><?= $cliente['cidade'] ?></td>
				<td><?= $cliente['estado'] ?></td>
				<td><?= $cliente['telefone'] ?></td>
				<td><?= $cliente['celular'] ?></td>
				<td>
					<form action="clientes-deletar.php" method="post">
            			<input type="hidden" name="id" value="<?=$cliente['cliente_id']?>" />
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


