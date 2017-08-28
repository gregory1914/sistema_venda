<?php include("php/cabecalho.php"); 
include("conecta.php");
include("banco-fornecedor.php");
include("usuario-logica.php");

verificaUsuario();

$fornecedores = listaFornecedor($conexao);
?>

<div class="container">
	<h2>Cadastrar Produto</h2>
	<form  action="produtos-adicionar.php"  method="post">
		<div class="row">
			<div class="form-group col-md-8">
				<label for="nomedoproduto">Nome</label>
				<input type="text" name="nomeProduto" class="form-control" id="nomedoproduto" placeholder="Insira o nome" required>
			</div>

			<div class="form-group col-md-4">
				<label for="valorproduto">Valor</label>
				<input type="text" name="valorProduto" class="form-control" id="valorproduto" placeholder="Insira o valor" required>
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-md-8">
				<label for="descricaodoproduto">Descrição</label>
				<input type="text" name="descricaoProduto" class="form-control" id="descricaodoproduto" placeholder="Insira a descricao" required>
			</div>
			<div class="form-group col-md-4">
				<label for="quantidadedoestoque">Quantidade Estoque</label>
				<input type="number" name="quantidadeEstoque" class="form-control" id="quantidadedoestoque" placeholder="Insira a quantidade do Estoque" required>
			</div>
		</div>
		

		<div class="row">
			<div class="form-group col-md-6">
				<label for="fornecedor">Fornecedor</label>
				<select class="form-control" id="nomeFornecedor" name="nomeFornecedor" required>
					<option disabled selected>Selecione o Fornecedor</option>
					<?php foreach($fornecedores as $fornecedor) : ?>
						<option value="<?=$fornecedor['fornecedor_id']?>"><?=$fornecedor['nome'] ?></option>
					<?php endforeach ?>
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