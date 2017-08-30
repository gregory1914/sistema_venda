<?php 
require_once("php/cabecalho.php"); 
require_once("banco-cliente.php");
require_once("usuario-logica.php");
require_once("class/Cliente.php");

verificaUsuario();

$cliente = new Cliente();

$cliente->nome = $_POST["nomeCliente"];
$cliente->cpf = $_POST["cpfCliente"];
$cliente->telefone = $_POST["telefoneCliente"];
$cliente->celular = $_POST["celularCliente"];
$cliente->endereco = $_POST["enderecoCliente"];
$cliente->numero = $_POST["numeroCliente"];
$cliente->complemento = $_POST["complementoCliente"];
$cliente->cep = $_POST["cepCliente"];
$cliente->cidade = $_POST["cidadeCliente"];
$cliente->estado = $_POST["estadoCliente"];

$inserir = insereCliente($conexao, $cliente);

if($inserir) {
	$_SESSION["success"] = "O Cliente <?= nomeCliente; ?> foi adicionado com sucesso!";
	header("Location: clientes-lista.php");
	die();
	
} else {
	$msg = mysqli_error($conexao);
	
	$_SESSION["danger"] = "O Cliente não foi adicionado!  <?= $msg ?>";
	header("Location: clientes-lista.php");
	die();
}


include("php/rodape.php"); ?>
