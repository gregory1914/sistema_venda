<?php 
include("conecta.php");
require_once("class/Cliente.php");

function listaCliente($conexao){
	$clientes = array();
	$resultado = mysqli_query($conexao, "select * from Clientes");

	while($cliente_array = mysqli_fetch_assoc($resultado)){

		$cliente = new Cliente();

		$cliente->setId($cliente_array{'cliente_id'});
		$cliente->setNome($cliente_array{'nome'});
		$cliente->setCpf($cliente_array{'cpf'});
		$cliente->setEndereco($cliente_array{'endereco'});
		$cliente->setNumero($cliente_array{'num_end'});
		$cliente->setComplemento($cliente_array{'complemento'});
		$cliente->setCep($cliente_array{'cep'});
		$cliente->setCidade($cliente_array{'cidade'});
		$cliente->setEstado($cliente_array{'estado'});
		$cliente->setTelefone($cliente_array{'telefone'});
		$cliente->setCelular($cliente_array{'celular'});

		array_push($clientes, $cliente);
	}

	return $clientes;
}

function insereCliente($conexao, Cliente $cliente)
{
	$query = "insert into Clientes (nome, cpf, endereco, num_end, complemento, cep, cidade, estado, telefone, celular, data_inscricao) values ('{$cliente->getNome()}', '{$cliente->getCpf()}', '{$cliente->getEndereco()}', {$cliente->getNumero()}, '{$cliente->getComplemento()}', '{$cliente->getCep()}', '{$cliente->getCidade()}', '{$cliente->getEstado()}', '{$cliente->getTelefone()}', '{$cliente->getCelular()}', NOW())";

	$resultadoDaInsersao = mysqli_query($conexao, $query);

	return $resultadoDaInsersao;
}

function removeCliente($conexao, $id) {
    $query = "delete from Clientes where cliente_id = {$id}";
    
    return mysqli_query($conexao, $query);
}