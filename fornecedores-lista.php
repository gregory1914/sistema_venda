<?php include("php/cabecalho.php"); 
include("conecta.php");
include("banco-fornecedor.php");

?>
<?php
$fornecedores = listaFornecedor($conexao);
?>
<div class="container-fluid">
	
	<h2>Listagem de Fornecedores</h2>

	<?php
		mostraAlerta("success");
		mostraAlerta("danger");
	?>

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
		foreach($fornecedores as $fornecedor) {
			?>
			<tr>
				<td><?= $fornecedor['nome'] ?></td>
				<td><?= $fornecedor['cidade'] ?></td>
				<td><?= $fornecedor['estado'] ?></td>
				<td><?= $fornecedor['telefone'] ?></td>
				<td><?= $fornecedor['celular'] ?></td>
				<td>
					<form action="fornecedores-deletar.php" method="post">
            			<input type="hidden" name="id" value="<?=$fornecedor['fornecedor_id']?>" />
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


