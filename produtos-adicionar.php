<?php 
require_once("php/cabecalho.php"); 
require_once("banco-produto.php");
require_once("usuario-logica.php");

verificaUsuario();


$nomeProduto = $_POST["nomeProduto"];
$valorProduto = $_POST["valorProduto"];
$descricaoProduto = $_POST["descricaoProduto"];
$quantidadeEstoque = $_POST["quantidadeEstoque"];
$nomeFornecedor = $_POST["nomeFornecedor"];

$inserir = insereProduto($conexao, $nomeProduto, $descricaoProduto, $valorProduto, $quantidadeEstoque, $nomeFornecedor);

if($inserir) {
	$_SESSION["success"] = "O Produto <?= nomeProduto; ?> foi adicionado com sucesso!";
	header("Location: produtos-lista.php");
	die();
	
} else {
	$msg = mysqli_error($conexao);
	
	$_SESSION["danger"] = "O Produto não foi adicionado!  <?= $msg ?>";
	header("Location: produtos-lista.php");
	die();
}

include("php/rodape.php"); ?>

