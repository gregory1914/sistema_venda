<?php 
	require_once("class/produto.php");

	$livro = new Produto();

	$livro->nome = "Livro de PHP de OO";
	var_dump($livro);
 ?>