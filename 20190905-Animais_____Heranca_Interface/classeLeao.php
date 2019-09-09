<?php

include("classeAnimal.php");
include("interfaceExibicao.php");

class Leao extends Animal implements Exibicao{
	
	private $tamJuba;
	private $rugido;
	
	public function __construct($vetor){
		parent::__construct($vetor);
		$this->velocidade_maxima = 50;
		$this->tamJuba = $vetor["tamJuba"];
		$this->rugido = $vetor["rugido"];
	}
	
	public function exibir(){
		echo "<label>Peso</label>: ".$this->peso."<br />";
		echo "<label>Tamanho</label>: ".$this->tamanho."<br />";
		echo "<label>Cor</label>: ".$this->cor."<br />";
		echo "<label>Velocidade Maxima</label>: ".$this->velocidade_maxima."<br />";
		echo "<label>Tamanho Juba</label>: ".$this->tamJuba."<br />";
		echo "<label>Rugido</label>: ".$this->rugido."<br />";

	}
	
}

?>