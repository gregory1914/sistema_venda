<?php 
require_once("php/cabecalho.php"); 
require_once("banco-produto.php");
require_once("banco-fornecedor.php");
require_once("usuario-logica.php");

verificaUsuario();

$id = $_POST['id-editar'];

$produto = buscaProduto($conexao, $id);
$fornecedores = listaFornecedor($conexao);

?>

<div class="container">
	
	<h2>Alterando Produto</h2>
	<form  action="produtos-alterar.php"  method="post">
		<input type="hidden" name="idProduto" value="<?= $produto->getId() ?>">
		<div class="row">
			<div class="form-group col-md-8">
				<label for="nomedoproduto">Nome</label>
				<input type="text" name="nomeProduto" class="form-control" id="nomedoproduto" value="<?= $produto->getNome() ?>" required>
			</div>

			<div class="form-group col-md-4">
				<label for="valorproduto">Valor</label>
				<input type="text" name="valorProduto" class="form-control" id="valorproduto" value="<?= $produto->getValor() ?>" required>
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-md-8">
				<label for="descricaodoproduto">Descrição</label>
				<input type="text" name="descricaoProduto" class="form-control" id="descricaodoproduto" value="<?= $produto->getDescricao() ?>" required>
			</div>

			<div class="form-group col-md-4">
				<label for="quantidadedoestoque">Quantidade Estoque</label>
				<input type="text" name="quantidadeEstoque" class="form-control" id="quantidadedoestoque" value="<?= $produto->getQuantidadeEstoque() ?>" required>
			</div>
		</div>
		

		<div class="row">
			<div class="form-group col-md-6">
				<label for="fornecedor">Fornecedor</label>
				<select class="form-control" id="nomeFornecedor" name="nomeFornecedor" required>
					<?php
					foreach($fornecedores as $fornecedor) : 
						$fornecedorChecked = $produto->fornecedor->getId() == $fornecedor->getId();
						$selecao = $fornecedorChecked ? "selected='selected'" : "";
					?>
					<option value="<?= $fornecedor->getId()?>" <?=$selecao?> >
						<?= $fornecedor->getNome() ?>
					</option>
					<?php 
					endforeach
					?>
				</select>
			</div>
		</div>

		<div class="row">
			<button type="submit" class="btn btn-primary col-md-4">Cadastrar</button>
			<a href="index.php" class="btn btn-danger col-md-4 ml-md-auto">Cancelar</a>
		</div>
	</form>
</div>

<?php include("php/rodape.php");?> 