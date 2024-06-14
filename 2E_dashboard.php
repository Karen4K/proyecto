<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostico</title>
    <link rel="stylesheet" href="dashboard.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: rgb(11, 101, 157);
            margin-top: 120px;
        }
        .contenedor-imagenes {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }
        .ProgresoUsuario {
            width: 150px;
            height: 150px;
            background: orange;
            border-radius: 100px 0 100px 100px;
            position: absolute;
            top: 0;
            right: 0;
        }
        .ProgresoUsuario span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: black;
            font-size: 20px;
        }
        .BarraMenu {
            width: 700px;
            height: 100px;
            background: rgb(7, 156, 193);
            border-radius: 20px 20px 20px 20px;
            position: fixed;
            top: 1px;
            box-shadow: 5px 8px 12px black;
            margin-left: 300px;
            display: flex;
            justify-content: space-around;
        }
        .BarraMenu span {
            font-size: 3rem;
            color: white;
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.8);
        }
        .BarraMenu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .BarraMenu li {
            cursor: pointer;
        }
        .BarraMenu li span {
            font-size: 3rem;
            color: white;
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.8);
            display: inline-block;
            margin: 0 15px 0 0;
        }
        .BarraMenu li.active span {
            color: #d4914d;
        }
        .BarraMenu li:hover span {
            color: #d4914d;
        }
        .rectangulo {
            width: 1000px;
            height: 500px;
            background-color: orange;
            margin: auto;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="ProgresoUsuario">
        <span>Progreso</span>
    </div>
    <div class="BarraMenu">
        <ul>
            <li><a href="dashboard.html"><span>Diagnóstico</span></a></li>
            <li><a href="Actividades.html"><span>Actividades</span></a></li>
        </ul>
    </div>
    <div class="rectangulo">
        <h3 align="center">Resultado</h3>
        <br><br>
        <h4>Comprensión</h4><br>
        <h4>Velocidad</h4><br>
        <h4>Tiempo</h4>
    </div>
    <script>
        const menuItems = document.querySelectorAll('.BarraMenu li a');
        menuItems.forEach(menuItem => {
            menuItem.addEventListener('click', (event) => {
                event.preventDefault();
                const href = menuItem.getAttribute('href');
                history.pushState(null, null, href);
                // Cargar el contenido de la página
            });
        });

        const imageLinks = document.querySelectorAll('.image-links a');
        imageLinks.forEach(imageLink => {
            imageLink.addEventListener('click', (event) => {
                event.preventDefault();
                const href = imageLink.getAttribute('href');
                history.pushState(null, null, href);
                // Cargar el contenido de la página
            });
        });
    </script>
</body>
</html>
