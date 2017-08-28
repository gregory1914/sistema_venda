<?php include("php/cabecalho.php"); 
	  include("conecta.php");
	  include("banco-cliente.php");

$nomeCliente = $_POST["nomeCliente"];
$cpfCliente = $_POST["cpfCliente"];
$telefoneCliente = $_POST["telefoneCliente"];
$celularCliente = $_POST["celularCliente"];
$enderecoCliente = $_POST["enderecoCliente"];
$numeroCliente = $_POST["numeroCliente"];
$complementoCliente = $_POST["complementoCliente"];
$cepCliente = $_POST["cepCliente"];
$cidadeCliente = $_POST["cidadeCliente"];
$estadoCliente = $_POST["estadoCliente"];

$inserir = insereCliente($conexao, $nomeCliente, $cpfCliente, $telefoneCliente, $celularCliente, $enderecoCliente, $numeroCliente, $complementoCliente, $cepCliente, $cidadeCliente, $estadoCliente);

if($inserir) {
	$_SESSION["success"] = "O Cliente <?= nomeCliente; ?> foi adicionado com sucesso!";
	header("Location: clientes-lista.php");
	die();
	
} else {
	$msg = mysqli_error($conexao);
	
	$_SESSION["danger"] = "O Cliente não foi adicionado!  <?= $msg ?>";
	header("Location: clientes-lista.php");
	die();
}


include("php/rodape.php"); ?>
