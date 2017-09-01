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
		$fornecedor->setNome($produto_array['fornecedores_nome']);
		$fornecedor->setId($produto_array{'fornecedor_id'});
		
		$produto->setId($produto_array{'produto_id'});
		$produto->setNome($produto_array{'nome'});
		$produto->setValor($produto_array{'valor'});
		$produto->setDescricao($produto_array{'descricao'});
		$produto->setQuantidadeEstoque($produto_array{'quant_estoque'});
		$produto->fornecedor = $fornecedor;

		array_push($produtos, $produto);
	}

	return $produtos;
}

function insereProduto($conexao, Produto $produto)
{
	$query = "insert into Produtos (nome, descricao, valor, quant_estoque, fornecedor_id) values ('{$produto->getNome()}', '{$produto->getDescricao()}', {$produto->getValor()}, {$produto->getQuantidadeEstoque()}, {$produto->fornecedor->getId()})";

	$resultadoDaInsersao = mysqli_query($conexao, $query);

	return $resultadoDaInsersao;
}

function removeProduto($conexao, $id) {
    $query = "delete from Produtos where produto_id = {$id}";
    
    return mysqli_query($conexao, $query);
}	

function buscaProduto($conexao, $id) {
    $query = "select * from Produtos where produto_id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    $produto_buscado = mysqli_fetch_assoc($resultado);
	
	$fornecedor = new Fornecedor();
	$fornecedor->setId($produto_buscado['fornecedor_id']);

	$produto = new Produto();				
	$produto->setId($produto_buscado{'produto_id'});
	$produto->setNome($produto_buscado{'nome'});
	$produto->setValor($produto_buscado{'valor'});
	$produto->setDescricao($produto_buscado{'descricao'});
	$produto->setQuantidadeEstoque($produto_buscado{'quant_estoque'});
	$produto->fornecedor = $fornecedor;

    return $produto;
}

function alteraProduto($conexao, $produto) {
    $query = "update Produtos set nome = '{$produto->getNome()}', valor = {$produto->getValor()}, descricao = '{$produto->getDescricao()}', fornecedor_id= {$produto->fornecedor->getId()}, quant_estoque = {$produto->getQuantidadeEstoque()} where produto_id = '{$produto->getId()}'";
   
    return mysqli_query($conexao, $query);
}