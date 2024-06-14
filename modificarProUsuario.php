<?php
$mysqli = new mysqli("localhost", "root", "", "comprendetulectura");

if (mysqli_connect_errno()) {
    echo 'Conexion Fallida: ' . mysqli_connect_error();
    exit();
}

// Define el ID de usuario estáticamente (reemplaza con el valor deseado)
$id = 1; // Cambia esto al ID que necesites

// Realiza la consulta SQL para obtener los datos del usuario
$query = "SELECT nombreusuario, apaterno, amaterno, nombres, genero, contraseña, edad, pais, ntelefono, correo FROM usuario WHERE id = $id";
$resultado = $mysqli->query($query);

if ($resultado) {
    $row = $resultado->fetch_assoc();
    // Continúa con el resto de tu código...
} else {
    echo 'Error al ejecutar la consulta: ' . $mysqli->error;
}
?>

<html>
	<head>
		<title>Comprende tu lectura</title>
        <link rel="stylesheet" href="3p.css">
	</head>
	<body>
		<?php
			//require('cabecera.php');
		?>
		<center>
		<FONT face=Arial size=4 COLOR='blue'>
		<h1>Modificar Datos del Usuario:</h1>
		</FONT>					
		<form name="modificar_usuario" method="POST" action="ModificarUsuario.php">			
			<table width="70%">
				<tr>
					<!--<input type="hidden" name="id" value="<?php echo $id; ?>">-->

					<td width="300" align="right"><b>N&uacute;ombre: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VNombre" size="20" value="<?php echo $row['nombres']; ?>" /></td>
				</tr>	
				<tr>
					<td width="300" align="right"><b>Primer Apellido: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VpApellido" size="50" value="<?php echo $row['apaterno']; ?>" /></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="right"><b>Segundo Apellido: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VsApellidio" size="50" value="<?php echo $row['amaterno']; ?>" /></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="right"><b>Nombre de Usuario: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VnUsuario" size="50" value="<?php echo $row['nombreusuario']; ?>" /></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="right"><b>Contraseña: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VContra" size="10" value="<?php echo $row['contraseña']; ?>" /></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="right"><b>Correo Electronico: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VCoElec" size="2" value="<?php echo $row['correo']; ?>" readonly/></td><!--No deja modificar el grupo-->
				</tr>
				<tr>
				<tr>
					<td width="300" align="right"><b>Edad: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VEdad" size="10" value="<?php echo $row['edad']; ?>" readonly /></td><!--No deja modificar el semestre-->
				</tr>
				<tr>
					<td width="300" align="right"><b>Pais: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VPais" size="25" value="<?php echo $row['pais']; ?>" readonly /></td><!--No deja modificar la carrera-->
				</tr>
				<tr>
					<td width="300" align="right"><b>Numero de telefono: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VNumTel" size="50" value="<?php echo $row['ntelefono']; ?>" /></td>
				</tr>
                <!--En genero no supe donde meter la consulta a la base-->
                <tr>
					<td width="300" align="right"><b>Genero: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                    <select id="genero" name="Vgenero" size="1" value="<?php echo $row['genero']; ?>" required>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select><br>
					
				</tr>
								
					<td width="300" align="right"><br><input type="submit" name="Guardar" value="GUARDAR" /></td>
					<td width="300" align="left"><a href="Actividades.html"><br><input type='button' value='CANCELAR' name='Cancelar'></a></td>					
				</tr>
			</table>
		</form>
		</center>
	</body>
</html>