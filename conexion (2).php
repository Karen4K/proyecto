<!-- Plantilla de conexión al servicio de base de datos. Muestra un error si no se puede conectar -->

<?php
	
	// Se conecta al servidor con el usuario de la base de datos y la contraseña, abriendo una base de datos.
	$mysqli=new mysqli("localhost","root","","comprendetulectura"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>