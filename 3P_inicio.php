<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, rgb(252, 255, 104), rgb(106, 255, 103), rgb(69, 221, 255)); 
        }
        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        form {
            width: 100%;
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-size: 14px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #081ab8;
            color: #ffffff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            padding: 10px 20px;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0a8877;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Inicio de Sesión</h2>
        <form id="credencialesForm" method="POST" action="credenciales.php" onsubmit="return validateForm()">
            <label for="nombredeusuario">Nombre de Usuario:</label>
            <input type="text" id="nombredeusuario" name="nombredeusuario" required><br>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br>

            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>

    <script>
        function validateForm() {
            var nombredeusuario = document.getElementById('nombredeusuario').value;
            var correo = document.getElementById('correo').value;
            var contrasena = document.getElementById('contrasena').value;

            if (nombredeusuario === '' || correo === '' || contrasena === '') {
                alert('Por favor, complete todos los campos.');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
