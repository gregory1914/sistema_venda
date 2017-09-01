<?php 

class Produto {

	private $id;
	private $nome;
	private $valor;
	private $descricao;
	private $quantidadeEstoque;
	public $fornecedor;


	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}
	
	public function precoComDesconto($taxa){
		if ($taxa > 0 && $taxa <= 0.5){
			$this->valor -= $this->valor * $taxa;
		}
		return $this->valor;
	}

	public function getValor(){
		return $this->valor;
	}

	public function setValor($preco){
		if ($preco > 0){
			$this->valor = $preco;
		}
	}	

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getQuantidadeEstoque(){
		return $this->quantidadeEstoque;
	}

	public function setQuantidadeEstoque($quantidadeEstoque){
		if($quantidadeEstoque > 0){
			$this->quantidadeEstoque = $quantidadeEstoque;
		}
	}

}
?>