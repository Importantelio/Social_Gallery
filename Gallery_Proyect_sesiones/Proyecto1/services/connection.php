<?php
//conexión base de datos.
$conn = mysqli_connect('localhost','root','qweQWE123','fotos');
 if (mysqli_connect_errno()) { //te devuelve el código de error del último error. Con mysqli_connect_error daría la descripción del error.
 	die("Error al conectarnos a la base de datos: ". mysqli_connect_error());
 }else{
 	mysqli_set_charset($conn,"utf8"); //dar el tipo de caracteres con utf8.
 }
?>