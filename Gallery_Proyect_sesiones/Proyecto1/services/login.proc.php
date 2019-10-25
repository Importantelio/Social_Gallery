<?php
include "./connection.php";

$user = $_REQUEST['user'];
$pass = $_REQUEST['password'];
$encript = md5($pass);
//echo "$encript <br>";
//Entra si está configurada la variable del formulario del login
if(isset($_REQUEST['user'])){
	
//echo "$encript <br>";
	$query = "SELECT * FROM users WHERE name_u='$user' AND pass_u='$encript'";
	//echo "$query";
	$result = mysqli_query($conn,$query);
	//La variable $result debería de tener como mínimo un registro coincidente
	if(!empty($result) && mysqli_num_rows($result)==1){
		$row = mysqli_fetch_array($result);
		//Creo una nueva sesión y defino $_SESSION['nombre']
		session_start();
		$_SESSION['nombre']=$user;
		//Voy a mi sitio personal
		header("Location: ../home.php");
	}else{
		//Ha fallado la autenticación vuelvo a index.php
		//echo "Existe el usuario pero: o bien, está vacia la consulta, o bien, aún estando llena no tiene ningún registro coincidente. ";
		header("Location: ../index.php");
		
	}
//Si no está configurada la variable del formulario del login vuelve al index.php
}else{
	//echo "No existe el usuario.";
	header("Location: ../index.php");
	
}	
?>