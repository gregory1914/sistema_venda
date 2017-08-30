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

function insereCliente($conexao, $nomeCliente, $cnpjCliente, $telefoneCliente, $celularCliente, $enderecoCliente, $numeroCliente, $complementoCliente, $cepCliente, $cidadeCliente, $estadoCliente)
{
	$query = "insert into Clientes (nome, cpf, endereco, num_end, complemento, cep, cidade, estado, telefone, celular, data_inscricao) values ('{$nomeCliente}', '{$cnpjCliente}', '{$enderecoCliente}', {$numeroCliente}, '{$complementoCliente}', '{$cepCliente}', '{$cidadeCliente}', '{$estadoCliente}', '{$telefoneCliente}', '{$celularCliente}', NOW())";

	$resultadoDaInsersao = mysqli_query($conexao, $query);

	return $resultadoDaInsersao;
}

function removeCliente($conexao, $id) {
    $query = "delete from Clientes where cliente_id = {$id}";
    
    return mysqli_query($conexao, $query);
}