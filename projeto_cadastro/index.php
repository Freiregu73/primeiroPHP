<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gus Burguer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<h1>Cadastro na Gus Burguer</h1>
	
	<form action="informacoes.php" method="post">
		<label for="nome">Nome:</label> <br>
		<input type="text" name="nome" id="nome" maxlength="50" required autocomplete="off" autofocus> <br> <br>
		<label for="endereco">Rua:</label> <br>
		<input type="text" name="rua" id="rua" maxlength="50" required autocomplete="off"> <br> <br>
		<label for="endereco">Número:</label> <br>
		<input type="number" name="numero" id="numero" maxlength="10" required autocomplete="off"> <br> <br>


	</form>



</body>
</html>