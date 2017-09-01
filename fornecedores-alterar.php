<?php 
require_once("php/cabecalho.php"); 
require_once("banco-fornecedor.php");
require_once("usuario-logica.php");
require_once("class/Fornecedor.php");

verificaUsuario();

$fornecedor = new Fornecedor();

$fornecedor->setId($_POST["idFornecedor"]);
$fornecedor->setNome($_POST["nomeFornecedor"]);
$fornecedor->setCnpj($_POST["cnpjFornecedor"]);
$fornecedor->setTelefone($_POST["telefoneFornecedor"]);
$fornecedor->setCelular($_POST["celularFornecedor"]);
$fornecedor->setEndereco($_POST["enderecoFornecedor"]);
$fornecedor->setNumero($_POST["numeroFornecedor"]);
$fornecedor->setComplemento($_POST["complementoFornecedor"]);
$fornecedor->setCep($_POST["cepFornecedor"]);
$fornecedor->setCidade($_POST["cidadeFornecedor"]);
$fornecedor->setEstado($_POST["estadoFornecedor"]);

$alterar = alteraFornecedor($conexao, $fornecedor);

if($alterar) {
	$_SESSION["success"] = "O Fornededor <?= nomeFornecedor; ?> foi alterado com sucesso!";
	header("Location: fornecedores-lista.php");
	die();
	
} else {
	$msg = mysqli_error($conexao);
	
	$_SESSION["danger"] = "O Fornecedor não foi alterado!  <?= $msg ?>";
	header("Location: fornecedores-lista.php");
	die();
}

include("php/rodape.php"); ?>

