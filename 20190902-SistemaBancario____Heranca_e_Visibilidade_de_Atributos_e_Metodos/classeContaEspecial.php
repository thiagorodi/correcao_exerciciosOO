<?php
include("classeContaCorrente.php");

class ContaEspecial extends ContaCorrente{
		
	private $limite;
	
	public function __construct($valor){
		parent::__construct($valor);
		$this->limite = $valor["limite"];
	}
	
	public function sacar($valor){
		if($valor<=$this->saldo+$this->limite){
			$this->saldo -= $valor;
			return "Saque realizado com sucesso";
		}
		else{
			return "Saldo insuficiente para este saque";
		}
	}
	
}

?>