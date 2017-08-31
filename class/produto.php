<?php 

class Produto {

	public $id;
	public $nome;
	public $valor;
	public $descricao;
	public $quantidadeEstoque;
	public $fornecedor;

	public function precoComDesconto(){
		$this->valor -= $this->valor * 0.1;
		return $this->valor;
	}
}
?>