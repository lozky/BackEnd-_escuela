<?php
session_start();
require '../controlator/conexion.php';

	// verifico si el usuario tiene creada la sesion previamente, si el email esta en la variable de sesion.
	if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
    $email = $_SESSION['email'];
		
		// Traigo los datos del email correspondiente, por ej. nombre de usuario, apellido, nombre ,etc
		$get_datos_usuario = mysqli_query($db_connection, "SELECT * FROM usuarios WHERE email = '$email'");
		$datosUsuario =  mysqli_fetch_assoc($get_datos_usuario);

	}else{
    
		//si no esta es porque no pasó por el formulario de login, asi que afuera
    header('Location: ../views/login.php');

	exit;
}
?>