<?php 
include("conecta.php");
require_once("class/Fornecedor.php");

function listaFornecedor($conexao){
	$fornecedores = array();
	$resultado = mysqli_query($conexao, "select * from Fornecedores");

	while($fornecedor_array = mysqli_fetch_assoc($resultado)){

		$fornecedor = new Fornecedor();
		
		$fornecedor->setId($fornecedor_array{'fornecedor_id'});
		$fornecedor->setNome($fornecedor_array{'nome'});
		$fornecedor->setCnpj($fornecedor_array{'cnpj'});
		$fornecedor->setEndereco($fornecedor_array{'endereco'});
		$fornecedor->setNumero($fornecedor_array{'num_end'});
		$fornecedor->setComplemento($fornecedor_array{'complemento'});
		$fornecedor->setCep($fornecedor_array{'cep'});
		$fornecedor->setCidade($fornecedor_array{'cidade'});
		$fornecedor->setEstado($fornecedor_array{'estado'});
		$fornecedor->setTelefone($fornecedor_array{'telefone'});
		$fornecedor->setCelular($fornecedor_array{'celular'});

		array_push($fornecedores, $fornecedor);
	}

	return $fornecedores;
}

function insereFornecedor($conexao, Fornecedor $fornecedor)
{
	$query = "insert into Fornecedores (nome, cnpj, endereco, num_end, complemento, cep, cidade, estado, telefone, celular, data_inscricao) values ('{$fornecedor->getNome()}', '{$fornecedor->getCnpj()}', '{$fornecedor->getEndereco()}', {$fornecedor->getNumero()}, '{$fornecedor->getComplemento()}', '{$fornecedor->getCep()}', '{$fornecedor->getCidade()}', '{$fornecedor->getEstado()}', '{$fornecedor->getTelefone()}', '{$fornecedor->getCelular()}', NOW())";

	$resultadoDaInsersao = mysqli_query($conexao, $query);

	return $resultadoDaInsersao;
}

function removeFornecedor($conexao, $id) {
    $query = "delete from Fornecedores where fornecedor_id = {$id}";
    
    return mysqli_query($conexao, $query);
}

function buscaFornecedor($conexao, $id) {
    $query = "select * from Fornecedores where fornecedor_id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    $fornecedor_buscado = mysqli_fetch_assoc($resultado);

	$fornecedor = new Fornecedor();				
	$fornecedor->setId($fornecedor_buscado{'fornecedor_id'});
	$fornecedor->setNome($fornecedor_buscado{'nome'});
	$fornecedor->setCnpj($fornecedor_buscado{'cnpj'});
	$fornecedor->setEndereco($fornecedor_buscado{'endereco'});
	$fornecedor->setNumero($fornecedor_buscado{'num_end'});
	$fornecedor->setComplemento($fornecedor_buscado{'complemento'});
	$fornecedor->setCep($fornecedor_buscado{'cep'});
	$fornecedor->setCidade($fornecedor_buscado{'cidade'});
	$fornecedor->setEstado($fornecedor_buscado{'estado'});
	$fornecedor->setTelefone($fornecedor_buscado{'telefone'});
	$fornecedor->setCelular($fornecedor_buscado{'celular'});

    return $fornecedor;
}

function alteraFornecedor($conexao, $fornecedor) {
    $query = "update Fornecedores set nome = '{$fornecedor->getNome()}', cnpj = '{$fornecedor->getCnpj()}', endereco = '{$fornecedor->getEndereco()}', num_end = {$fornecedor->getNumero()}, complemento = '{$fornecedor->getComplemento()}', cep = '{$fornecedor->getCep()}', cidade = '{$fornecedor->getCidade()}', estado = '{$fornecedor->getEstado()}', telefone = '{$fornecedor->getTelefone()}', celular = '{$fornecedor->getCelular()}' where fornecedor_id = '{$fornecedor->getId()}'";
   
    return mysqli_query($conexao, $query);
}