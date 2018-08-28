<?php

		require_once "aula2.php";

		$pessoa = new Pessoa;
		
		$pessoa->setNome("Helber Chaves");

		$pessoa->andar();

		var_dump($Pessoa);

// Situação - 1
//	(new Pessoa)->andar();
// Situação - 2 
//	new Pessoa;

?>