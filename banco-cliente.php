<?php 
include("conecta.php");

function listaCliente($conexao){
	$clientes = array();
	$resultado = mysqli_query($conexao, "select * from Clientes");

	while($cliente = mysqli_fetch_assoc($resultado)){
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