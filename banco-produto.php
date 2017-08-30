<?php 
include("conecta.php");

function listaProduto($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, "select p.*, f.nome as fornecedores_nome from produtos as p join fornecedores as f on p.fornecedor_id = f.fornecedor_id");

	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}

	return $produtos;
}

function insereProduto($conexao, $nomeProduto, $descricaoProduto, $valorProduto, $quantidadeEstoque, $nomeFornecedor)
{
	$query = "insert into Produtos (nome, descricao, valor, quant_estoque, fornecedor_id) values ('{$nomeProduto}', '{$descricaoProduto}', {$valorProduto}, {$quantidadeEstoque}, {$nomeFornecedor})";

	$resultadoDaInsersao = mysqli_query($conexao, $query);

	return $resultadoDaInsersao;
}

function removeProduto($conexao, $id) {
    $query = "delete from Produtos where produto_id = {$id}";
    
    return mysqli_query($conexao, $query);
}	