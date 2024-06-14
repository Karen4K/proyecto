<html>
	<head>
		<title>Nuevos recursos</title>
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
		<h1>Nuevo Recurso</h1>
		</FONT>
		<form name="nuevo_recurso" method="POST" action="guarda_recurso.php">
			<table width="70%">
				<tr>
					<td width="300" align="right"><b>Id: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="id" size="20" required /></td>
				</tr>
				<tr>
					<td width="300" align="right"><b>Título: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="titulo" size="50" required /></td>
				</tr>
				<tr>
				<tr>
					<td width="300" align="right"><b>Autor: &nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="autor" size="50" required /></td>
				</tr>
				
				<tr>
					<td colspan="2" align=right><br>
						<input type="submit" name="Enviar" value="REGISTRAR"/>
					</td>
                    <td><a href="recursos.php"><br><input type='button' value='CANCELAR' name='Cancelar'></a></td>
				</tr>
			</table>
		</form>
		</center>
	</body>
</html>			