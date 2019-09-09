<?php

class ContaCorrente{

	private $cpf;
	private $nome;
	public $email;
	private $nroConta;
	protected $saldo;
	
	public function __construct($vetor){
		$this->cpf = $vetor["cpf"];
		$this->nome = $vetor["nome"];
		$this->email = $vetor["email"];
		$this->nroConta = @date("YmdHis");
		$this->saldo = 0;
		
	}
	
	public function depositar($valor){
		$this->saldo += $valor;
		return "Depósito realizado com sucesso";
	}
	
	public function sacar($valor){
		if($valor<=$this->saldo){
			$this->saldo -= $valor;
			return "Saque realizado com sucesso";
		}
		else{
			return "Saldo insuficiente para este saque";
		}
	}	
	
	public function exibe_cadastro(){
		echo "
		<fieldset>
			<legend>Conta Cadastrada com sucesso!</legend>
			CPF: $this->cpf<br />
			Nome: $this->nome<br />
			Email: $this->email<br />
			Numero da Conta: $this->nroConta<br />
			Saldo: $this->saldo<br />
		</fieldset>";
	}
	
	public function exibe_linha(){
		echo "
		<li>
			<a href='operar_conta.php?numero=$this->nroConta'>
				$this->nome
			</a> ($this->nroConta) - R$ $this->saldo
		</li>";
	}
	
	public function get_nroConta(){
		return $this->nroConta;
	}
	
}

?>