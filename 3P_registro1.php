<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, rgb(252, 255, 104), rgb(106, 255, 103), rgb(69,221,255));
        }

        .wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
        }

        .inner {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
            padding: 20px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            margin: 10px;
            box-sizing: border-box;
            text-align: center;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 16px;
        }

        form {
            width: 100%;
        }

        label {
            display: block;
            margin: 5px 0 3px;
            font-size: 12px;
        }

        input, select {
            width: calc(100% - 10px);
            padding: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 12px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            padding: 8px 16px;
            width: 100%;
            box-sizing: border-box;
            font-size: 12px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            padding: 6px 12px;
            margin-top: 10px;
            font-size: 12px;
            width: 100%;
            box-sizing: border-box;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="inner">
            <div class="container">
                <h2>Crear una Cuenta</h2>
                <form id="registerForm" method="POST" action="3P_register2.php">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required><br>

                    <label for="primerApellido">Primer Apellido:</label>
                    <input type="text" id="primerApellido" name="primerApellido" required><br>

                    <label for="segundoApellido">Segundo Apellido:</label>
                    <input type="text" id="segundoApellido" name="segundoApellido"><br>

                    <label for="usuario">Nombre de Usuario:</label>
                    <input type="text" id="usuario" name="usuario" required><br>

                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required><br>

                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" required><br>

                    <label for="edad">Edad:</label>
                    <input type="number" id="edad" name="edad" required><br>

                    <label for="pais">País:</label>
                    <input type="text" id="pais" name="pais" required><br>

                    <label for="telefono">Número de Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required><br>

                    <label for="genero">Género:</label>
                    <select id="genero" name="genero" required>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select><br>

                    <input type="submit" value="Registrarse">
                </form> 
        </div>
    </div>
</body>
</html>
