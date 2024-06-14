<?php
	require('Conexion.php');	
	$id=$_GET['id'];
	$query="SELECT id, titulo, autor FROM recursos WHERE id='$id'";
	$resultado=$mysqli->query($query);	
	$row=$resultado->fetch_assoc();	
?>
<html>
	<head>
		<title>Mostrar</title>
        <style>
        body{
            background: linear-gradient(to right, rgb(252, 255, 104), rgb(106, 255, 103), rgb(69, 221, 255));
        }
        </style>
	</head>
	<body>
		<?php
			require('Cabecera_5I.html');
		?>
		<center>
		<FONT face=Arial size=4 COLOR='red'>
		<h1>¿Eliminar este Recurso?</h1>
		</FONT>					
		<form name="modificar_usuario" method="POST" action="eliminar.php">			
			<table width="70%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">

					<td width="300" align="right"><b>Id de Recurso: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="Vncontrol" size="20" value="<?php echo $row['id']; ?>" readonly/></td>
				</tr>	
				<tr>
					<td width="300" align="right"><b>Título: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="Vapellido1" size="50" value="<?php echo $row['titulo']; ?>" readonly/></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="right"><b>Autor: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="Vapellido2" size="50" value="<?php echo $row['autor']; ?>" readonly/></td>
				</tr>
	
				<tr>				
					<td width="300" align="right"><br><input type="submit" name="Eliminar" value="ELIMINAR" /></td>
					<td><a href="recursos.php"><br><input type='button' value='CANCELAR' name='Cancelar'></a></td>					
				</tr>
			</table>
		</form>
		</center>
	</body>
</html>