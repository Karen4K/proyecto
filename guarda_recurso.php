<?php 	
	require('Conexion.php');
	$id=$_POST['id'];
	$titulo=$_POST['titulo'];
	$autor=$_POST['autor'];
	
	$query="INSERT INTO recursos (id, titulo, autor)
	        VALUES ('$id','$titulo','$autor')";
	$resultado=$mysqli->query($query);
?>
<html>
	<head>
		<title>Guardar Recurso</title>
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
			<?php if($resultado>0){ ?>
				<FONT face=Arial size=4 COLOR='red'>
					<h1>Recurso Guardado</h1>
				</FONT>			
				<?php }else{ ?>
				<h1>Error al Guardar Recurso</h1>		
			<?php	} ?>		
			<p></p>	
	  		<table width='1024' border='0' class='borde' bgcolor='#D8D8D8'>
				<tr>
  					<td align='center'><a href="recursos.php"><input type='button' value='Regresar' name='submit'></a></td>
  				</tr>
  			</table>
		</center>
	</body>
</html>