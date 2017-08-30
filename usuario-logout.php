<?php 
include("usuario-logica.php");
logout();
$_SESSION["success"] = "Deslogado com sucesso";
header("Location: index.php");
die();
