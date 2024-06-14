<?php
	require('Conexion.php');	
	$id=$_GET['id'];	

	$query="SELECT id, titulo, autor, texto FROM recursos WHERE id='$id'";
	// $query="SELECT usuario, contrasenia, email FROM usuarios WHERE id='$id'";	
	$resultado=$mysqli->query($query);	
	$row=$resultado->fetch_assoc();	
?>

<html>
	<head>
		<title>Mostrar Recursos</title>
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
		<FONT face=Arial size=4 COLOR='blue'>
		<h1>Datos del Recurso</h1>
		</FONT>					
		<form name="modificar_recurso" method="POST" action="eliminar.php">			
			<table width="70%" border='1'>
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">

					<td width="300" align="right"><b>Id de Recurso: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="id" size="20" value="<?php echo $row['id']; ?>" readonly/></td>
				</tr>	
				<tr>
					<td width="300" align="right"><b>Titulo: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="titulo" size="50" value="<?php echo $row['titulo']; ?>" readonly/></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="right"><b>Autor: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="autor" size="50" value="<?php echo $row['autor']; ?>" readonly/></td>
				</tr>

				<tr>
					<td width="300" align="right"><b>Sinopsis: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="texto" size="50" value="<?php echo $row['texto']; ?>" readonly/></td>
				</tr>
			</table>
		</form>
		<p></p>		
  		<table width='1024' border='0' class='borde' >
			<tr>
				<td align='center'><a href="recursos.php"><input type='button' value='REGRESAR' name='submit' bgcolor='yellow'></a></td>
  				</tr>
  		</table>
		</center>
	</body>
</html>