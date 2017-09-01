<?php 
require_once("php/cabecalho.php"); 
require_once("banco-fornecedor.php");

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
				<td><?= $fornecedor->getNome() ?></td>
				<td><?= $fornecedor->getCidade() ?></td>
				<td><?= $fornecedor->getEstado() ?></td>
				<td><?= $fornecedor->getTelefone() ?></td>
				<td><?= $fornecedor->getCelular() ?></td>
				<td>
					<form action="fornecedores-deletar.php" method="post">
            			<input type="hidden" name="id" value="<?=$fornecedor->getId()?>" />
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


