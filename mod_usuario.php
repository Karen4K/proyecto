<?php 	
	require('Conexion.php');
	$id=$_POST['id'];


	$titulo=$_POST['titulo'];
	$autor=$_POST['autor'];
	
	$query="UPDATE recursos SET id='$id', titulo='$titulo', autor='$autor' WHERE id='$id'";
	$resultado=$mysqli->query($query);	
?>
<html>
	<head>
		<title>Modificar</title>
	</head>	
	<body>
		<center>			
			<?php 
				require('Cabecera_5I.html');
				if($resultado>0){
			?>
				<FONT face=Arial size=4 COLOR='blue'>
					<h1>Datos del Recurso Modificado</h1>
				</FONT>							
					<?php 	}else{ ?>				
				<h1>Error al Modificar Recurso</h1>				
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