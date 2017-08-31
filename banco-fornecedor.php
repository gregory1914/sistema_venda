<?php 
include("conecta.php");
require_once("class/Fornecedor.php");

function listaFornecedor($conexao){
	$fornecedores = array();
	$resultado = mysqli_query($conexao, "select * from Fornecedores");

	while($fornecedor_array = mysqli_fetch_assoc($resultado)){

		$fornecedor = new Fornecedor();
		
		$fornecedor->id = $fornecedor_array{'fornecedor_id'};
		$fornecedor->nome = $fornecedor_array{'nome'};
		$fornecedor->cnpj = $fornecedor_array{'cnpj'};
		$fornecedor->endereco = $fornecedor_array{'endereco'};
		$fornecedor->numumero = $fornecedor_array{'num_end'};
		$fornecedor->complemento = $fornecedor_array{'complemento'};
		$fornecedor->cep = $fornecedor_array{'cep'};
		$fornecedor->cidade = $fornecedor_array{'cidade'};
		$fornecedor->estado = $fornecedor_array{'estado'};
		$fornecedor->telefone = $fornecedor_array{'telefone'};
		$fornecedor->celular = $fornecedor_array{'celular'};

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