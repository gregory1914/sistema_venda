<?php 
require_once("php/cabecalho.php"); 
require_once("banco-fornecedor.php");
require_once("usuario-logica.php");
require_once("class/Fornecedor.php");

verificaUsuario();

$fornecedor = new Fornecedor();

$fornecedor->nome = $_POST["nomeFornecedor"];
$fornecedor->cnpj = $_POST["cnpjFornecedor"];
$fornecedor->telefone = $_POST["telefoneFornecedor"];
$fornecedor->celular = $_POST["celularFornecedor"];
$fornecedor->endereco = $_POST["enderecoFornecedor"];
$fornecedor->numero = $_POST["numeroFornecedor"];
$fornecedor->complemento = $_POST["complementoFornecedor"];
$fornecedor->cep = $_POST["cepFornecedor"];
$fornecedor->cidade = $_POST["cidadeFornecedor"];
$fornecedor->estado = $_POST["estadoFornecedor"];

$inserir = insereFornecedor($conexao, $fornecedor);

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


