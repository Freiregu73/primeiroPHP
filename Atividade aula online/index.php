<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Sistema de Cadastro de Contato</title>
</head>
<body>

	<div class="formulario">
		<h1>Sistema de Cadastro de Contato/Cliente</h1>

	<form action="informacoes.php" method="post">

	<label for="idNome">Nome Completo:</label><br>
	<input type="text" id="idNome" name="nome" placeholder="Insira seu nome" maxlength="50" autocomplete="off" required autofocus><br><br>

	<label for="idEmail">Email:</label><br>
	<input type="email" id="idEmail" name="email" placeholder="Insira seu email" maxlength="50" autocomplete="off" required><br><br>

	<label for="idCidade">Cidade:</label><br>
	<input type="text" id="idCidade" name="cidade" placeholder="Insira sua cidade" maxlength="50" autocomplete="off required"><br><br>

	<label for="idIdade">Idade:</label><br>
	<input type="number" id="idIdade" name="idade" placeholder="Insira sua idade" maxlength="3" autocomplete="off" required><br><br>
 
	<label for="idSexo">Sexo:</label><br>
	<input type="radio" id="idSexo" name="sexo" value="Masculino">Masculino<br>
	<input type="radio" id="idSexo" name="sexo" value="Feminino">Feminino<br>
	<input type="radio" id="idSexo" name="sexo" value="LGBT+">LGBT+<br>
	<input type="radio" id="idSexo" name="sexo" value="Prefiro não informar">Prefiro não informar<br><br>

	<label for="idObservacao">Observações:</label><br>
	<textarea id="idObservacao" name="observacao"></textarea><br><br>

	<input type="submit" id="botao" name="entrar" value="Enviar">
	<input type="reset" id="botao" name="limpar" value="Limpar">


	</div>

	


</form>


</body>
</html>