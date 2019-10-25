








<?php
//como necesito hacer cosas con la bd necesito el include
include './connection.php';
//...validaciones: imagen no repetida, extensión imagen, tamaño imagen...
//insertarlo en la bd y mover la imagen de sitio
//$_FILES[aquí en mi caso va 'imagen' que es lo que he puesto en el formulario][name, es una palabra reservada para saber el nombre de mi archivo, q en este caso es una imagen, pero tmb serviria para un doc por ejemplo.]: es la variable para saber las cosas de la imagen. 
//basename(path) devolveria el nombre del arhivo, de mi foto.
//Recojo variables con request.
$fecha = $_REQUEST['fecha'];
$titulo = $_REQUEST['titulo'];
/*$imagen = $_REQUEST['imagen'];*/
$destination = "./web/gallery/".basename($_FILES['imagen']['name']);
/*
$kb=70;
if ($_FILES['imagen']['size'] <= $kb * 1024) {
*/
include "./header.php";

	$user = $_SESSION['nombre'];
	echo "$user";
	$querysub = "SELECT id FROM users WHERE name_u='$user'";
	echo "$querysub";
	$resultsub = mysqli_query($conn,$querysub);
	$rowsub = mysqli_fetch_array($resultsub);
	$id = $rowsub['id'];
	echo "$id";
if(move_uploaded_file($_FILES['imagen']['tmp_name'],"../".$destination)){ //tmp_name es el archivo temporal y le estoy diciendo que me mueva este archivo al destino. (Esta función intenta asegurarse de que el archivo designado por filename es un archivo subido válido (lo que significa que fue subido mediante el mecanismo de subida HTTP POST de PHP). Si el archivo es válido, será movido al nombre de archivo dado por destination.)filename: el nombre de archivo del archivo subido.destination: el destino del archivo movido. Luego, Mientras name es el nombre orginal del archivo en la máquina del cliente, tmp_name es el nombre temporal del archivo con el cual el archivo subido fue guardado en el servidor.
	//insertamos en la bd.
	$query= "INSERT INTO gallery (name_g,path_g,date_g,id) VALUES ('$titulo','$destination','$fecha','$id')";
	echo "$query";
	$result= mysqli_query($conn, $query);
	//Para que me pase mis variables a la pág de index.php.
	header("Location: ../home.php");

}else{
	echo "Error!!!!";
	echo "<a href='../home.php'> HOME </a>"; 
}

/*
}else{
	echo "No funciona la comprovación del tamaño de la imagen.!";
}
*/

?>