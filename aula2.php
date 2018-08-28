<?php
	class Pessoa{
		protected $altura;
		protected $nome;

		public function setName($nome) {
			$this->nome = $nome;
		}
		public function andar (){
			echo "Andando...";
		}
	}
?>
