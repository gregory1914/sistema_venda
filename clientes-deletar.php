<?php 
require_once("php/cabecalho.php"); 
require_once("banco-cliente.php");
require_once("usuario-logica.php");

verificaUsuario();


$id = $_POST['id'];
removeCliente($conexao, $id);
$_SESSION["danger"] = "Cliente removido com sucesso.";
header("Location: clientes-lista.php");
die();


include("php/rodape.php");
?>