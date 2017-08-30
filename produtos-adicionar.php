<?php 
require_once("php/cabecalho.php"); 
require_once("banco-produto.php");
require_once("usuario-logica.php");
require_once("class/produto.php");

verificaUsuario();

$produto = new Produto();

$produto->nome = $_POST["nomeProduto"];
$produto->valor = $_POST["valorProduto"];
$produto->descricao = $_POST["descricaoProduto"];
$produto->quantidadeEstoque = $_POST["quantidadeEstoque"];
$produto->nomeFornecedor = $_POST["nomeFornecedor"];

$inserir = insereProduto($conexao, $produto);

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

