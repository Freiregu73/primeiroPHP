<?php 

	$nome = $_POST['nome'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];

	$peso = (float)$peso;
	$altura = (float)$altura;

	$imc = $peso / ($altura*$altura);

	if ($imc) {
		// code...
	}

	echo "Óla $nome, <br> Seu peso é de: $peso KG. <br> Sua altura é de: $altura m. <br> Sua taxa do IMC é igual a $imc.";



	


 ?>