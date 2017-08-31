<?php 
include("conecta.php");
require_once("class/Cliente.php");

function listaCliente($conexao){
	$clientes = array();
	$resultado = mysqli_query($conexao, "select * from Clientes");

	while($cliente_array = mysqli_fetch_assoc($resultado)){

		$cliente = new Cliente();

		$cliente->id = $cliente_array{'cliente_id'};
		$cliente->nome = $cliente_array{'nome'};
		$cliente->cpf = $cliente_array{'cpf'};
		$cliente->endereco = $cliente_array{'endereco'};
		$cliente->numero = $cliente_array{'num_end'};
		$cliente->complemento = $cliente_array{'complemento'};
		$cliente->cep = $cliente_array{'cep'};
		$cliente->cidade = $cliente_array{'cidade'};
		$cliente->estado = $cliente_array{'estado'};
		$cliente->telefone = $cliente_array{'telefone'};
		$cliente->celular = $cliente_array{'celular'};

		array_push($clientes, $cliente);
	}

	return $clientes;
}

function insereCliente($conexao, Cliente $cliente)
{
	$query = "insert into Clientes (nome, cpf, endereco, num_end, complemento, cep, cidade, estado, telefone, celular, data_inscricao) values ('{$cliente->nome}', '{$cliente->cpf}', '{$cliente->endereco}', {$cliente->numero}, '{$cliente->complemento}', '{$cliente->cep}', '{$cliente->cidade}', '{$cliente->estado}', '{$cliente->telefone}', '{$cliente->celular}', NOW())";

	$resultadoDaInsersao = mysqli_query($conexao, $query);

	return $resultadoDaInsersao;
}

function removeCliente($conexao, $id) {
    $query = "delete from Clientes where cliente_id = {$id}";
    
    return mysqli_query($conexao, $query);
}