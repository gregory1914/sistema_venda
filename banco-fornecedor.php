<?php 
include("conecta.php");

function listaFornecedor($conexao){
	$fornecedores = array();
	$resultado = mysqli_query($conexao, "select * from Fornecedores");

	while($fornecedor = mysqli_fetch_assoc($resultado)){
		array_push($fornecedores, $fornecedor);
	}

	return $fornecedores;
}

function insereFornecedor($conexao, $nomeFornecedor, $cnpjFornecedor, $telefoneFornecedor, $celularFornecedor, $enderecoFornecedor, $numeroFornecedor, $complementoFornecedor, $cepFornecedor, $cidadeFornecedor, $estadoFornecedor)
{
	$query = "insert into Fornecedores (nome, cnpj, endereco, num_end, complemento, cep, cidade, estado, telefone, celular, data_inscricao) values ('{$nomeFornecedor}', '{$cnpjFornecedor}', '{$enderecoFornecedor}', {$numeroFornecedor}, '{$complementoFornecedor}', '{$cepFornecedor}', '{$cidadeFornecedor}', '{$estadoFornecedor}', '{$telefoneFornecedor}', '{$celularFornecedor}', NOW())";

	$resultadoDaInsersao = mysqli_query($conexao, $query);

	return $resultadoDaInsersao;
}

function removeFornecedor($conexao, $id) {
    $query = "delete from Fornecedores where fornecedor_id = {$id}";
    
    return mysqli_query($conexao, $query);
}