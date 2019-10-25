<!DOCTYPE html>
<html>
<head>
	<title>Práctica</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="codi.js"></script>
</head>
<?php
	include "./services/header.php";
?>	
<body style="font: 90% sans-serif;">
	<!--Formulario-->
	<form class="form" method="post" name="formulario" enctype="multipart/form-data" action="./services/processa.php" style=" background-image: linear-gradient(#b3ff1a, #446600); color: #003300;font-weight: bold;" onsubmit="return validacionCodi()">
		Título: <input type="text" name="titulo" id="titulo" placeholder="Título..." >
		<br>
		<!--con el accept="image/jpg, image/jpeg, image/png" consigo que al seleccionar la foto el user solo pueda seleccionar imagenes del tipo que marco.-->
		Imagen: <input type="file" name="imagen" id="imagen" placeholder="Imagen..." accept="image/jpg, image/jpeg, image/png, image/gif" >
		<br>
		<!--Con el required consigo que ese campo sea obligatorio de rellenar.-->
		Fecha: <input type="date" name="fecha" id="fecha">
		<br>
		<input class="button" type="submit" name="Enviar">
	</form>
	<br><br><br><br><br><br><br>
<?php
//Conexion bd.
include "./services/connection.php";

//Selección y muestra de datos de la base de datos
$nombre = $_SESSION['nombre'];
$result = mysqli_query($conn,"SELECT gallery.name_g, gallery.path_g, gallery.date_g FROM gallery INNER JOIN users ON gallery.id=users.id WHERE users.name_u='$nombre'");
if (!empty($result) && mysqli_num_rows($result)>0) {
		//Pinto el resultado.
		//Recorro el array linea a linea, fila a fila.
		while ($row = mysqli_fetch_array($result)){
				echo "<div style='background-image: linear-gradient(#b3ff1a, #446600);color:white'>";
				echo "<br><br>";
				//Añadimos la imagen a la pag web con la etiqueta img de html
				echo "<img src=".$row['path_g']." style='width:25%;height:25%;'>";
				//Añadimos el título a la pag web con la etiqueta h2 de html
				echo "<h2> Nombre: ".$row['name_g']."</h2>";
				//Añado la fecha.
				echo "<h2> Fecha: ".$row['date_g']."</h2>";
				echo "</div>";	
		} 
		//header("Location: ./services/processa.php");
}else{
	//si no hay ninguna imagen para mostrar.
	echo "0 resultados. Prueba a insertar una imagen.";
}
?>


</body>
</html>