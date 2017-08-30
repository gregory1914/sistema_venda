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

function insereFornecedor($conexao, Fornecedor $fornecedor)
{
	$query = "insert into Fornecedores (nome, cnpj, endereco, num_end, complemento, cep, cidade, estado, telefone, celular, data_inscricao) values ('{$fornecedor->nome}', '{$fornecedor->cnpj}', '{$fornecedor->endereco}', {$fornecedor->numero}, '{$fornecedor->complemento}', '{$fornecedor->cep}', '{$fornecedor->cidade}', '{$fornecedor->estado}', '{$fornecedor->telefone}', '{$fornecedor->celular}', NOW())";

	$resultadoDaInsersao = mysqli_query($conexao, $query);

	return $resultadoDaInsersao;
}

function removeFornecedor($conexao, $id) {
    $query = "delete from Fornecedores where fornecedor_id = {$id}";
    
    return mysqli_query($conexao, $query);
}