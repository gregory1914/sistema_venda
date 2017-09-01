<?php 
require_once("php/cabecalho.php"); 
require_once("banco-cliente.php");
require_once("usuario-logica.php");
require_once("class/Cliente.php");

verificaUsuario();

$cliente = new Cliente();

$cliente->setId($_POST["idCliente"]);
$cliente->setNome($_POST["nomeCliente"]);
$cliente->setCpf($_POST["cpfCliente"]);
$cliente->setTelefone($_POST["telefoneCliente"]);
$cliente->setCelular($_POST["celularCliente"]);
$cliente->setEndereco($_POST["enderecoCliente"]);
$cliente->setNumero($_POST["numeroCliente"]);
$cliente->setComplemento($_POST["complementoCliente"]);
$cliente->setCep($_POST["cepCliente"]);
$cliente->setCidade($_POST["cidadeCliente"]);
$cliente->setEstado($_POST["estadoCliente"]);

$alterar = alteraCliente($conexao, $cliente);

if($alterar) {
	$_SESSION["success"] = "O Cliente <?= nomeCliente; ?> foi alterado com sucesso!";
	header("Location: clientes-lista.php");
	die();
	
} else {
	$msg = mysqli_error($conexao);
	
	$_SESSION["danger"] = "O Cliente não foi alterado!  <?= $msg ?>";
	header("Location: clientes-lista.php");
	die();
}

include("php/rodape.php"); ?>

