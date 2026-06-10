<?php 
	$host = "localhost";
	$user = "gusta";
	$pwd = "123456";
	$db = "dbloja";

	$nome = $_POST['nome'];
	$email = $_POST['email'];

	$conection = mysqli_connect($host, $user, $pwd, $db);

	if (mysqli_connect_errno()) {
		echo "Erro ao conectar a base de dados" . mysqli_connect_error();

	}else{

		$sql = "insert into tbPessoa (nome,email)values('$nome','$email')";

		if (mysqli_query($conection,$sql)){
			echo "Cadastrado com sucesso!!!";

		}else{
			echo "Erro ao cadastrar!" . mysqli_error();
		}
		mysqli_close($conection);

	}


 ?>