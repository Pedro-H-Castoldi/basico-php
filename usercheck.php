<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action = "welcome.php" method = "POST">
		<label>Nome Completo</label>
		<input type = "text" name = "user"/>

		<label>Sexo</label>
		<input type="radio" name="sexo" value="M">Masculino
		<input type="radio" name="sexo" value="F">Feminino
		<input type="radio" name="sexo" value="O">Outro
		<br><br>

		<label>E-mail</label>
		<input type="email" name="email">

		<label>senha</label>
		<input type="password" name="pass">

		<input type="submit" value="enviar">
	</form>
</body>
</html>