<?php


	class Animal{
		
		public $peso;
		public $cor;
		public $tamanho;
		protected $velocidade_maxima;
		
		public function __construct($vetor){
			$this->peso = $vetor["peso"];
			$this->cor = $vetor["cor"];
			$this->tamanho = $vetor["tamanho"];
		}

		public function exibir(){
			echo "<label>Peso</label>: ".$this->peso."<br />";
			echo "<label>Tamanho</label>: ".$this->tamanho."<br />";
			echo "<label>Cor</label>: ".$this->cor."<br />";
			echo "<label>Velocidade Maxima</label>: ".$this->velocidade_maxima."<br />";
		}
		
		
	}


?>