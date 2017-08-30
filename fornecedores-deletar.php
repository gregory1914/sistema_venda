<?php 
require_once("php/cabecalho.php"); 
require_once("banco-fornecedor.php");
require_once("usuario-logica.php");

verificaUsuario();


$id = $_POST['id'];
removeFornecedor($conexao, $id);
$_SESSION["danger"] = "Fornecedor removido com sucesso.";
header("Location: fornecedores-lista.php");
die();

include("php/rodape.php");
?>