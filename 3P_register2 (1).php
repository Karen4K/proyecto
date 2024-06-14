<?php


$mysqli = new mysqli("localhost", "root", "", "comprendetulectura");

if ($mysqli->connect_errno) {
    echo 'Conexión fallida: ' . $mysqli->connect_error;
    exit();
}

$nombreusuario = $_POST['usuario'];
$contrasena = ($_POST['contrasena']);
$apaterno = $_POST['primerApellido'];
$amaterno = $_POST['segundoApellido'];
$nombres = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$ntelefono = $_POST['telefono'];
$pais = $_POST['pais'];
$genero = $_POST['genero'];

$query = "INSERT INTO usuario (nombreusuario, contraseña, apaterno, amaterno, nombres, correo, edad, ntelefono, pais, genero)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

if ($stmt = $mysqli->prepare($query)) {

    $stmt->bind_param('ssssssisss', $nombreusuario, $contrasena, $apaterno, $amaterno, $nombres, $correo, $edad, $ntelefono, $pais, $genero);
    
    if ($stmt->execute()) {
        echo 'Registro exitoso';
    } else {
        echo 'Error en la ejecución de la consulta: ' . $stmt->error;
    }

    $stmt->close();
} else {
    echo 'Error en la preparación de la consulta: ' . $mysqli->error;
}

$mysqli->close();
?>

