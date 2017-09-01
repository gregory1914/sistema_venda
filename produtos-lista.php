<?php 
require_once("php/cabecalho.php"); 
require_once("banco-produto.php");

$produtos = listaProduto($conexao);
?>
<div class="container-fluid">


	<h2>Listagem de Produtos</h2>

	<table class="table table-striped table-bordered">
		<tr>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Fornecedor</th>
			<th>Estoque</th>
			<th>Valor</th>
			<th>Valor com Desconto</th>
			<th colspan="2">Opções</th>	

		</tr>
		<?php 
		foreach($produtos as $produto) {
			?>
			<tr>
				<td><?= $produto->getNome() ?></td>
				<td><?= $produto->getDescricao() ?></td>
				<td><?= $produto->fornecedor->getNome() ?></td>
				<td><?= $produto->getQuantidadeEstoque() ?> und.</td>
				<td>R$ <?= $produto->getValor() ?></td>
				<td>R$ <?= $produto->precoComDesconto(0.20) ?></td>
				<td>
					<form action="produtos-deletar.php" method="post">
						<input type="hidden" name="id" value="<?= $produto->getId() ?>" />
						<button class="btn btn-danger">Remover</button>
					</form>
				</td>
				<td>					
					<form action="produtos-alterar-formulario.php" method="post">
						<input type="hidden" name="id-editar" value="<?= $produto->getId() ?>" />
						<button class="btn btn-warning">Alterar</button>
					</form>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</div>

<?php include("php/rodape.php"); ?>