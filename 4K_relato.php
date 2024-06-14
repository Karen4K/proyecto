<?php
require('Conexion.php');

$nombreusuario = isset($_GET['nombreusuario']) ? $_GET['nombreusuario'] : '';

// Consulta para obtener el relato
$query_relato = "SELECT texto, autor FROM actividadjuegoaventura WHERE id=1";
$resultado_r = $mysqli->query($query_relato);

// Verificación de errores en las consultas
if (!$resultado_r) {
    echo "Error: " . $mysqli->error;
}

// Obtener el relato
$relato = '';
$autor = ''; // Declarar la variable $autor fuera del bucle para conservar el último valor
while ($row = $resultado_r->fetch_assoc()) {
    $relato .= $row['texto'] . ' '; // Concatenar los textos en lugar de sobrescribir
    $autor = $row['autor']; // Conservar el autor
}

// Cerrar la conexión a la base de datos
$mysqli->close();
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego: La Búsqueda del Tesoro</title>
    <link rel="stylesheet" href="Tstyles.css">
</head>

<body>
<div >
<h1>Lee detalladamente la siguente fabula una sola vez
        y contesta las siguentes preguntas</h1>
   <!-- <div class="relato">-->
    
        <?php /* echo $relato;*/ ?>
       <!-- <p>Autor: <?php /*echo $autor; */?></p>  Mostrar el autor del relato -->
   <!-- </div> -->
   <img src='imagenes/fondorelatoq.png' width='950' height='570' border='0'>
   <button id="btn" onclick="location.href='Tjuego.php?nombreusuario=<?php echo $nombreusuario; ?>'">Contesta las preguntas</button>
</div>
<br>
    

</body>

</html>