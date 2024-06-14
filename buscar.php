<?php
	require('Conexion.php');	
	$VDatoBuscar=$_POST['DatoBuscar'];

	$query="SELECT id, titulo, autor, texto  FROM recursos WHERE titulo LIKE '%$VDatoBuscar%'";
	// $query="SELECT usuario, contrasenia, email FROM usuarios WHERE id='$id'";	
	$resultado=$mysqli->query($query);	
	//$row=$resultado->fetch_assoc();	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buscar recursos</title>
    <style>
        body{
            background: linear-gradient(to right, rgb(252, 255, 104), rgb(106, 255, 103), rgb(69, 221, 255));
        }
    </style>
</head>
<body>
	<center>
		<?php 
			require('Cabecera_5I.html');
			if($resultado>0){ ?>
			<!--
			if($row>0){ ?>
			-->

			<FONT face=Arial size=4 COLOR='green'><h1>Resultado de la búsqueda</h1></FONT>

			<table border=1 width="1024">
				<thead>
					<tr bgcolor='#ECF6CE' align="center">
						<td width="140" align="center"><b>Id</b></td>
						<td><b>Título</b></td>
						<td width="80"><b>Autor</b></td>
						<td width="80"><b>Mostrar</b></td>
					</tr>
					<tbody>
						<?php while($row=$resultado->fetch_assoc()){ ?>
							<tr>
								<td width="140" align="center"><?php echo $row['id'];?></td>
								<td><?php echo $row['titulo'];?>
								</td>
								<td width="80" align="center"><?php echo $row['autor'];?></td>
								<td align="center">
									<a href="mostrar2.php?id=<?php echo $row['id'];?>"><input type='button' value='Mostrar' name='submit'></a>

								</td>
							</tr>
						<?php } ?>
					</tbody>
			</table>
						


		<?php 	}else{ ?>	
			<h1>Recurso no localizado</h1>
		<?php	} ?>
			<p></p>		
  		<table width='1024' border='0' class='borde' >
			<tr>
				<td align='center'><a href="recursos.php"><input type='button' value='REGRESAR' name='submit'></a></td>
  				</tr>
  		</table>
	</center>
</body>
</html>