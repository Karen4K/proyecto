<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comprendetulectura";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombredeusuario = $_POST['nombredeusuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $nombredeusuario = stripslashes($nombredeusuario);
    $correo = stripslashes($correo);
    $contrasena = stripslashes($contrasena);
    $nombredeusuario = $conn->real_escape_string($nombredeusuario);
    $correo = $conn->real_escape_string($correo);
    $contrasena = $conn->real_escape_string($contrasena);

    $sql = "SELECT * FROM usuario WHERE nombreusuario='$nombredeusuario' AND correo='$correo' AND contraseña='$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['nombredeusuario'] = $nombredeusuario;
        $_SESSION['correo'] = $correo;
        header("Location: 2E_dashboard.php");
        exit();
    } else {
        echo "Credenciales incorrectas. Por favor, inténtelo de nuevo.";
    }
}

$conn->close();
?>
