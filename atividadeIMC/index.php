<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cálculo IMC</title>
	<link rel="stylesheet" type="css/style.css" href="">
</head>
<body>

	<h1>Cálculo IMC</h1>

	<form action="imc.php" method="post">
		<label for="nome">Nome:</label> <br>
		<input type="text" name="nome" id="nome" maxlength="50" required autocomplete="off" autofocus size="20"> <br> <br>
		<label for="peso">Seu peso:</label> <br>
		<input type="text" name="peso" id="peso" maxlength="10" required autocomplete="off" size="10"> <br> <br>
		<label for="peso">Sua altura:</label> <br>
		<input type="text" name="altura" id="altura" maxlength="10" required autocomplete="off" size="10"> <br> <br>
		<input type="submit" name="calcular" value="Calcular">
		<input type="reset" name="limpar" value="Limpar">
		
	</form>


	<script src="js/script.js"></script>
</body>
</html>