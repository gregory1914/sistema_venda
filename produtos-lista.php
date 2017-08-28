<?php include("php/cabecalho.php"); 
include("conecta.php");
include("banco-produto.php");

?>
<?php
$produtos = listaProduto($conexao);
?>
<div class="container-fluid">


	<h2>Listagem de Produtos</h2>

	<table class="table table-striped table-bordered">
		<tr>
			<th>Nome</th>
			<th>Valor</th>
			<th>Quantidade Estoque</th>
			<th>Descrição</th>
			<th>Fornecedor</th>
			<th>Opções</th>	
		</tr>
		<?php 
		foreach($produtos as $produto) {
			?>
			<tr>
				<td><?= $produto['nome'] ?></td>
				<td><?= $produto['valor'] ?></td>
				<td><?= $produto['quant_estoque'] ?></td>
				<td><?= $produto['descricao'] ?></td>
				<td><?= $produto['fornecedores_nome'] ?></td>
				<td>
					<form action="produtos-deletar.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['produto_id']?>" />
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