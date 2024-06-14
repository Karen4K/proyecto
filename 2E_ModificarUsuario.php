<?php
	/*$mysqli=new mysqli("localhost","root","","comprendetulectura");
	if($mysql->connect_error) {
		echo "conexion fallida: ".$mysqli->connect_error;
		exit();
	}*/
	// Se conecta al servidor con el usuario de la base de datos y la contraseña, abriendo una base de datos.
	$mysqli=new mysqli("localhost","root","","comprendetulectura"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
    $Nombre=$_POST["VNombre"];//
    $PrimerApellido=$_POST["VpApellido"];//
    $SegundoApellido=$_POST["VsApellidio"];//
    $NombreUsuario=$_POST["VnUsuario"];//
    $Contrasenia=$_POST["VContra"];//
    $Email=$_POST["VCoElec"];//
    $Edad=$_POST["VEdad"];//
    $Pais=$_POST["VPais"];//
    $NumTel=$_POST["VNumTel"];//
    $Genero=$_POST["Vgenero"];//
    $query="UPDATE usuario SET nombreusuario='$NombreUsuario', 
                               apaterno='$PrimerApellido', amaterno='$SegundoApellido',
                               nombres='$Nombre', genero='$Genero',
                               contraseña='$Contrasenia', edad='$Edad', pais='$Pais',
                               ntelefono='$NumTel',correo='$Email' WHERE id='0000000001'";
	$resultado=$mysqli->query($query);	
?>
<html>
	<head>
		<title>Comprende tu lectura</title>
	</head>	
	<body>
		<center>			
			<?php 
				//require('cabecera.php');
				if($resultado>0){
			?>
				<FONT face=Arial size=4 COLOR='blue'>
					<h1>Datos de Usuario Modificada</h1>
				</FONT>							
					<?php 	}else{ ?>				
				<h1>Error al Modificar Usuario</h1>				
			<?php	} ?>			
			<p></p>	
	  		<table width='1024' border='0' class='borde' bgcolor='#D8D8D8'>
				<tr>
  					<td align='center'><a href="Actividades.html"><input type='button' value='PRINCIPAL' name='submit'></a></td>
  				</tr>
  			</table>			
		</center>
	</body>
</html>