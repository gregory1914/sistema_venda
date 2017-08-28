<?php 
include("conecta.php");
include("banco-usuario.php");
include("usuario-logica.php");


$usuario = buscaUsuario($conexao, $_POST["login"], $_POST["senha"]);

if($usuario == null) {
	$_SESSION["danger"] = "Usuário ou senha inválido!";
    header("Location: index.php");
} else {
    $_SESSION["success"] = "Usuário logado com sucesso.";
    logaUsuario($usuario["login"]);
    header("Location: index.php");
}
die();