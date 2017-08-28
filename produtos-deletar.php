<?php include("php/cabecalho.php"); 
include("conecta.php");
include("banco-produto.php");


$id = $_POST['id'];
removeProduto($conexao, $id);
$_SESSION["danger"] = "Produto removido com sucesso.";
header("Location: produtos-lista.php");
die();


include("php/rodape.php");
?>