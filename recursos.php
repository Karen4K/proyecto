<?php
	require('Conexion.php');	
	$query="SELECT id, titulo, autor FROM recursos";
	$resultado=$mysqli->query($query);
?>

<head>
    <style>
        body{
            background: linear-gradient(to right, rgb(252, 255, 104), rgb(106, 255, 103), rgb(69, 221, 255));
        }
    </style>
	<title>Recursos</title>
</head>
<body>
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars"></i>
        </label>
        <ul>
            <li><a href="5I_Inicio.html">Inicio</a></li>
            <li><a href="3P_inicio.php">Salir</a></li>
            <li><a href="Contactanos.html">Contactanos</a></li>
			<li><a href="Actividades.html">Actividades</a></li>
        </ul>
    </nav>
		<?php
			require('Cabecera_5I.html');
		?>
		<center>
		<FONT face=Arial size=3 COLOR='black'>
		<h2>Listado de Cuentos:</h2>
		<table border=1 width="1024">
			<thead>
				<tr bgcolor='#ECF6CE' align="center">
					<td width="140" align="center"><b>Id de Recurso</b></td>
					<td><b>Título</b></td>
					<td width="50" align="center"><b>Autor(es)</b></td>
					<td width="80"><b>Cambios</b></td>
					<td width="80"><b>Bajas</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td width="140" align="center"><?php echo $row['id'];?></td>
							<td><?php echo $row['titulo'];
									  
								?>
							</td>
							<td width="50" align="center"><?php echo $row['autor'];?></td>

							<td align="center">
								<a href="modificar.php?id=<?php echo $row['id'];?>"><input type='button' value='Modificar' name='submit'></a>
							</td>
							<td align="center">
								<a href="mostrar.php?id=<?php echo $row['id'];?>"><input type='button' value='Eliminar' name='submit'></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
		<br>

  		<table width='1024' border='0' class='borde'>
  			<tr>
  				<td align='center'><a href="nuevo.php"><input type='button' value='NUEVO REGISTRO' name='submit'></a></td>
  			</tr>
  		</table>
  		<br>	

		<form name="buscar_RECURSO" method="POST" action="buscar.php">	
			<table width='1024' border='0' class='borde' bgcolor='#666000'>
  				<tr>
					<td width="400" align="right"><b>Buscar por Nombre: &nbsp;&nbsp;</b></td>
					<td><input type="text" name="DatoBuscar" size="35" required /></td>
  				</tr>
				<tr>
					<td colspan="2"align="center"><input type="submit" name="eviar" value="BUSCAR" /></td>
				</tr>

  			</table>
		</form>
        </center>
		</FONT>


		<style>
    *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

.cabecera{
    width: 100% !important;
    height: 330px !important;
}



#div25I{
    background-color: white;
    height: 95%;
    width: 95%;
    margin:auto;
    
}
/*.clearfix::after {
    content: "";
    clear: both;
    display: table;
  }*/

#h2_1_5I{
    text-align: left;
    font-style: arial;
    font-size: 400%;
    padding-left: 7%;
    padding-top: 10%;
    
}
#h2_2_5I{
    text-align: right;
    font-style: arial;
    font-size: 350%;
    padding-right: 10%;
    padding-top: 30%;
}


#P1{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 180%;
    padding-left: 220px;
    padding-right: 800px;
    padding-top: 70px;
    text-align: justify 
}
#P2{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 150%;
    padding-left: 700px;
    padding-right: 260px;
    padding-top: 70px;
    text-align: justify
}

#img15I{
    width: 40%;
    height: 40%;
    float: right;
    padding-top: 60px;
    padding-right: 50px;
    padding-bottom: 20px;
    
}










nav{/*barra azul*/
    background: rgba(3, 66, 149, 0.7);
    height: 80px;
    width: 100%;
}

nav ul{
    float: right;
    margin-right: 20px;
}
nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
}
nav ul li a{
    color: #fff;
    font-size: 18px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
}

li a.active, li a:hover{/*Cuando el mouse pasa por encima se cambia el color*/
    background: #000090;
    transition: .5s;
}
.checkbtn{/*las tres rayitas*/
    font-size: 30px;
    color: #fff;
    float: right;
    line-height: 80px; /*centra: arriba a abajo*/
    margin-right: 40px;
    cursor: pointer; /*manita*/
    display: none;/*que no se vea en desktop solo dispositivos pequeños*/
}
#check{/*el cuadrito*/
    display: none;
}

@media (max-width: 952px){/*en tablet*/
    .enlace{
        padding-left: 20px;
    }
    nav ul li a{
        font-size: 16px;
    }
}
@media (max-width: 858px){/*en telefono*/
    .checkbtn{
        display: block;
    }
    ul{
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #2c3e50;
        top: 80px;
        left: -100%;
        text-align: center;
        transition: all .5s;
    }
    nav ul li{
        display: block;
        margin: 50px 0;
        line-height: 30px;
    }
    nav ul li a{
        font-size: 20px;
    }
    li a:hover, li a.active{
        background: none;
        color: red;
    }
    #check:checked ~ ul{
        left: 0;
    }
}
</style>
</body>
</html>