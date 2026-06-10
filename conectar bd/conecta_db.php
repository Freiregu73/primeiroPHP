<?php 

	$host = "localhost";
	$user = "gusta";
	$pwd = "123456";
	$db = "dbloja";

	$conection = mysqli_connect($host, $user, $pwd, $db);

	if (mysqli_connect_errno()) {
		echo "Erro ao conectar a base de dados" . mysqli_connect_error();

	}else{
		echo "Banco de dados conectado com sucesso!!!";

		mysqli_close($conection);
	}

 ?>