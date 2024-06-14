<?php
require('Conexion.php');

// Recibe los datos del formulario de la pagina anterior 
$nombreusuario = $_POST['nombreusuario'];
$calificacion = $_POST['calificacion'];

// Consulta el número de intentos anteriores del usuario en la bd
$query = "SELECT COUNT(*) as intento FROM puntuacion WHERE nombreusuario = '$nombreusuario'";
$resultado = $mysqli->query($query);
$row = $resultado->fetch_assoc();
$intento = $row['intento'] + 1;

// Query para mandar los datos a la tabla de puntuacion
$queryc = "INSERT INTO puntuacion (nombreusuario, intento, PuntuacionJuevoAventura) VALUES ('$nombreusuario', '$intento', '$calificacion')"; 

if ($mysqli->query($queryc) === TRUE) {
    echo"Puntuación guardada exitosamente.";
} else {
    echo "Error al guardar la puntuación: " . $mysqli->error;
}


// Cerrar la conexión a la base de datos
$mysqli->close();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Redireccionar a Actividades.html</title>
</head>
<body>
    <button id="boton">Regresar</button>

    <script src="script.js"></script>
</body>
</html>

<script>

document.getElementById('boton').onclick = function() {
    location.href = 'Actividades.html';
};
    </script>