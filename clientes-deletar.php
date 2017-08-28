<?php include("php/cabecalho.php"); 
include("conecta.php");
include("banco-cliente.php");

$id = $_POST['id'];
removeCliente($conexao, $id);
$_SESSION["danger"] = "Cliente removido com sucesso.";
header("Location: clientes-lista.php");
die();


include("php/rodape.php");
?>