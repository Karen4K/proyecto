<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comprendetulectura";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombredeusuario = $_POST['nombredeusuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Escapar caracteres especiales para prevenir SQL Injection
    $nombredeusuario = stripslashes($nombredeusuario);
    $correo = stripslashes($correo);
    $contrasena = stripslashes($contrasena);
    $nombredeusuario = $conn->real_escape_string($nombredeusuario);
    $correo = $conn->real_escape_string($correo);
    $contrasena = $conn->real_escape_string($contrasena);

    // Consultar la base de datos
    $sql = "SELECT * FROM usuario WHERE nombreusuario='$nombredeusuario' AND correo='$correo' AND contraseña='$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['nombredeusuario'] = $nombreusuario;
        $_SESSION['correo'] = $correo;
        header("Location: Actividades.html?nombreusuario=$nombreusuario");
        exit();
    } else {
        echo "<script>alert('Credenciales incorrectas. Por favor, inténtelo de nuevo.');</script>";
    }
}

$conn->close();
?>