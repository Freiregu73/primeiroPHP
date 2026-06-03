<?php 
	setcookie('usuarios', 'etecia',time()+86400);

	setcookie('admin', 'master', time()+86400);

	$value = 'aluno';
	//setcookie("Ocupacao", $value);
	setcookie("Ocupacao", $value, time()+60);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Testando se o cookie foi definido</title>
 </head>
 <body>
 	<?php 

 		if (isset($_COOKIE['Ocupacao'])) {
		echo "Bem vindo ".$_COOKIE['Ocupacao']."! <br>";
		}else{
		echo "Usuário novo, seja bem vindo! <br>";
		};

 	 ?>
 
 </body>
 </html>