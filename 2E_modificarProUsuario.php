<?php
// Conexión a la base de datos
$mysqli = new mysqli("localhost", "root", "", "comprendetulectura");

// Verificar conexión
if (mysqli_connect_errno()) {
    echo 'Conexion Fallida : ', mysqli_connect_error();
    exit();
}

// Obtener el ID del usuario a modificar
//$id_usuario = $_GET['id']; // o $_POST['id'], dependiendo de cómo estés pasando el ID

// Preparar la consulta para obtener los datos del usuario
$consulta = "SELECT * FROM usuario WHERE id = 0000000001";

// Ejecutar la consulta
$resultado = $mysqli->query($consulta);

// Verificar que se obtuvieron resultados
if ($resultado->num_rows > 0) {
    // Obtener los datos en forma de array asociativo
    $row = $resultado->fetch_assoc();
} else {
    echo "No se encontró el usuario con ID: 0000000001";
    exit();
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
		<form name="modificar_usuario" method="POST" action="2E_ModificarUsuario.php">			
			<table width="70%">
				<tr>
					<!--<input type="hidden" name="id" value="<?php echo $id; ?>">-->

					<td width="300" align="center"><b>Nombre: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VNombre" size="20" value="<?php echo $row['nombres']; ?>" /></td>
				</tr>	
				<tr>
					<td width="300" align="center"><b>Primer Apellido: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VpApellido" size="50" value="<?php echo $row['apaterno']; ?>" /></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="center"><b>Segundo Apellido: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VsApellidio" size="50" value="<?php echo $row['amaterno']; ?>" /></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="center"><b>Nombre de Usuario: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VnUsuario" size="50" value="<?php echo $row['nombreusuario']; ?>" /></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="center"><b>Contraseña: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VContra" size="10" value="<?php echo $row['contraseña']; ?>" /></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="center"><b>Correo Electronico: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VCoElec" size="2" value="<?php echo $row['correo']; ?>" /></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="center"><b>Edad: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VEdad" size="10" value="<?php echo $row['edad']; ?>"  /></td>
				</tr>
				<tr>
					<td width="300" align="center"><b>Pais: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VPais" size="25" value="<?php echo $row['pais']; ?>"  /></td>
				</tr>
				<tr>
					<td width="300" align="center"><b>Numero de telefono: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="VNumTel" size="50" value="<?php echo $row['ntelefono']; ?>" /></td>
				</tr>
                <!--En genero no supe donde meter la consulta a la base-->
                <tr>
					<td width="300" align="center"><b>Genero: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                    <td><select id="genero" name="Vgenero" size="1" value="<?php echo $row['genero']; ?>">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select><br></td>
				</tr>
				<tr>
					<td width="300" align="center"><b>Email: &nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="Vemail" size="50" value="<?php echo $row['correo']; ?>" /></td>

				</tr>
				<tr>				
					<td width="300" align="right"><br><input type="submit" name="Guardar" value="GUARDAR" /></td>
					<td width="300" align="left"><a href="Actividades.html"><br><input type='button' value='CANCELAR' name='Cancelar'></a></td>					
				</tr>
			</table>
		</form>
		</center>
	</body>
</html>