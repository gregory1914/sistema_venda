<?php 
require_once("php/cabecalho.php"); 
require_once("banco-produto.php");
require_once("usuario-logica.php");
require_once("class/produto.php");
require_once("class/Fornecedor.php");

verificaUsuario();

$produto = new Produto();
$fornecedor = new Fornecedor();
$fornecedor->setId($_POST["nomeFornecedor"]);

$produto->setNome($_POST["nomeProduto"]);
$produto->setValor($_POST["valorProduto"]);
$produto->setDescricao($_POST["descricaoProduto"]);
$produto->setQuantidadeEstoque($_POST["quantidadeEstoque"]);
$produto->fornecedor = $fornecedor;

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

