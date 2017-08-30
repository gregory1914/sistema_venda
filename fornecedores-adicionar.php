<?php 
require_once("php/cabecalho.php"); 
require_once("banco-fornecedor.php");
require_once("usuario-logica.php");

verificaUsuario();

$nomeFornecedor = $_POST["nomeFornecedor"];
$cnpjFornecedor = $_POST["cnpjFornecedor"];
$telefoneFornecedor = $_POST["telefoneFornecedor"];
$celularFornecedor = $_POST["celularFornecedor"];
$enderecoFornecedor = $_POST["enderecoFornecedor"];
$numeroFornecedor = $_POST["numeroFornecedor"];
$complementoFornecedor = $_POST["complementoFornecedor"];
$cepFornecedor = $_POST["cepFornecedor"];
$cidadeFornecedor = $_POST["cidadeFornecedor"];
$estadoFornecedor = $_POST["estadoFornecedor"];

$inserir = insereFornecedor($conexao, $nomeFornecedor, $cnpjFornecedor, $telefoneFornecedor, $celularFornecedor, $enderecoFornecedor, $numeroFornecedor, $complementoFornecedor, $cepFornecedor, $cidadeFornecedor, $estadoFornecedor);

if($inserir) {
	$_SESSION["success"] = "O Fornecedor <?= nomeFornecedor; ?> foi adicionado com sucesso!";
	header("Location: fornecedores-lista.php");
	die();
	
} else {
	$msg = mysqli_error($conexao);
	
	$_SESSION["danger"] = "O Fornecedor não foi adicionado!  <?= $msg ?>";
	header("Location: fornecedores-lista.php");
	die();
}

include("php/rodape.php"); ?>


