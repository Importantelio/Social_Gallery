<!DOCTYPE html>
<html>
<head>
	<title>Práctica</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="codi.js"></script>
</head>
<body style="font: 90% sans-serif;">
	<?php
		include "./services/connection.php";
	?>
	<div class="button">
		<form method="post"  name="formulario" action="./services/login.proc.php" onsubmit="return validacion()"><!--Llamo a la función validación cuando el usuario haga click en submit.-->
			User: <input type="text" name="user" id="user" placeholder="User...">
			<br>
			Password: <input type="password" name="password" id="password" placeholder="Password...">
			<br>
			<input type="submit" name="Enviar">
		</form>
	</div>
</body>
</html>