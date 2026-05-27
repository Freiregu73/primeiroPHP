<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina WEB - Sessão de usuário</title>
</head>
<body>
	<?php 
		session_start();
		$_SESSION['nome'] = "administrador";

		//session_unset();

		session_destroy();

	 ?>
	 <h3>Sessão de usuário</h3>
	 <label>Bem vindo usuario: </label><?php echo $_SESSION['nome']; ?><br>
	 <label>ID usuario: </label><?php echo session_id(); ?>

</body>
</html>