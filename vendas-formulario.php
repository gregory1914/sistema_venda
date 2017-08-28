<?php include("php/cabecalho.php"); 
include("conecta.php");
include("banco-produto.php");
include("banco-cliente.php");
include("usuario-logica.php");

verificaUsuario();
$produtos = listaProduto($conexao);
$clientes = listaCliente($conexao);
?>

<div class="container">
	<h2>Cadastrar Produto</h2>
	<form  action="produtos-adicionar.php"  method="post">
		
		<div class="row">
			<div class="form-group col-md-4">
				<label for="produto">Produto</label>
				<select class="form-control" id="nomeproduto" name="nomeProduto" required>
					<option disabled selected>Selecione o Produto</option>
					<?php foreach($produtos as $produto) : ?>
						<option value="<?=$produto['produto_id']?>"><?=$produto['nome'] ?></option>
					<?php endforeach ?>
				</select>
			</div>

			<div class="form-group col-md-4">
				<label for="valorproduto">Valor Unitário</label>
				<input type="text" name="valorProduto" class="form-control" id="valorproduto" value="<?php $produto['valor']?>" required disabled>
			</div>

			<div class="form-group col-md-4">
				<label for="quantidadevenda">Quantidade</label>
				<input type="text" name="quantidadeVenda" class="form-control" id="quantidadevenda" placeholder="Insira a quantidade" required>
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-md-8">
				<label for="descricaodoproduto">Descrição</label>
				<input type="text" name="descricaoProduto" class="form-control" id="descricaodoproduto" required disabled="">
			</div>
		</div>
		

		<div class="row">
			<div class="form-group col-md-6">
				<label for="cliente">Cliente</label>
				<select class="form-control" id="nomecliente" name="nomeCliente" required>
					<option disabled selected>Selecione o Cliente</option>
					<?php foreach($clientes as $cliente) : ?>
						<option value="<?=$cliente['cliente_id']?>"><?=$cliente['nome'] ?></option>
					<?php endforeach ?>
				</select>
			</div>

			<div class="form-group col-md-6">
				<label for="valordavenda">Valor Final</label>
				<input type="text" name="valorVenda" class="form-control" id="valordavenda0" placeholder="Valor Final" required disabled>
			</div>
		</div>

		<div class="row">
			<button type="submit" class="btn btn-primary col-md-4">Cadastrar</button>
			<a href="index.php" class="btn btn-danger col-md-4 ml-md-auto">Cancelar</a>
		</div>
	</form>
</div>

<?php include("php/rodape.php");?> 