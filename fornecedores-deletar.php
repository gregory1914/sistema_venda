<?php include("php/cabecalho.php"); 
include("conecta.php");
include("banco-fornecedor.php");

$id = $_POST['id'];
removeFornecedor($conexao, $id);
$_SESSION["danger"] = "Fornecedor removido com sucesso.";
header("Location: fornecedores-lista.php");
die();

include("php/rodape.php");
?>