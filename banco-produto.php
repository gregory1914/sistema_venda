<?php 
include("conecta.php");
require_once("class/produto.php");
require_once("class/Fornecedor.php");


function listaProduto($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, "select p.*, f.nome as fornecedores_nome from produtos as p join fornecedores as f on p.fornecedor_id = f.fornecedor_id");

	while($produto_array = mysqli_fetch_assoc($resultado)){

		$produto = new Produto();

		$fornecedor = new Fornecedor();
		$fornecedor->nome = $produto_array['fornecedores_nome'];
		$fornecedor->id = $produto_array{'fornecedor_id'};

		$produto->id = $produto_array{'produto_id'};
		$produto->nome = $produto_array{'nome'};
		$produto->valor = $produto_array{'valor'};
		$produto->descricao = $produto_array{'descricao'};
		$produto->quantidadeEstoque = $produto_array{'quant_estoque'};
		$produto->fornecedor = $fornecedor;

		array_push($produtos, $produto);
	}

	return $produtos;
}

function insereProduto($conexao, Produto $produto)
{
	$query = "insert into Produtos (nome, descricao, valor, quant_estoque, fornecedor_id) values ('{$produto->nome}', '{$produto->descricao}', {$produto->valor}, {$produto->quantidadeEstoque}, {$produto->fornecedor->id})";

	$resultadoDaInsersao = mysqli_query($conexao, $query);

	return $resultadoDaInsersao;
}

function removeProduto($conexao, $id) {
    $query = "delete from Produtos where produto_id = {$id}";
    
    return mysqli_query($conexao, $query);
}	