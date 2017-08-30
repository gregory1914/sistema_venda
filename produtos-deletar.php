<?php 
require_once("php/cabecalho.php"); 
require_once("banco-produto.php");
require_once("usuario-logica.php");

verificaUsuario();



$id = $_POST['id'];
removeProduto($conexao, $id);
$_SESSION["danger"] = "Produto removido com sucesso.";
header("Location: produtos-lista.php");
die();


include("php/rodape.php");
?>