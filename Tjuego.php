<?php
require('Conexion.php');

//*
// Obtiene el nombnre de usuario para poder mandarlo a la bd con el porcentaje que ganó en esta actividad y el numero de intento


//*
// Query para mandar los datos a la tabla de puntuacion
//$queryt="INSERT INTO puntuacion (nombreusuario, intento, PuntuacionJuevoAventura)
	        //VALUES ('$nombreusuario','$intento','$calificacion')"; 
            //$resultadot=$mysqli->query($queryt);	
            //$row=$resultadot->fetch_assoc();	



// Consulta para obtener todas las preguntas y respuestas hasta el ID 3
$query = "SELECT pregunta, respuesta1, respuesta2, respuesta3, respuestaCorrecta FROM actividadjuegoaventura WHERE id <= 3";
$resultado = $mysqli->query($query);

$queryb = "SELECT beneficio FROM actividadjuegoaventura WHERE id =1";
$resultadob = $mysqli->query($queryb);


// Verificación de errores en la consulta

//*
//if (!$resultadot) {
 //   echo "Error: " . $mysqli->error;
//}


if (!$resultado) {
    echo "Error: " . $mysqli->error;
}

if (!$resultadob) {
    echo "Error: " . $mysqli->error;
}

// Inicialización de variables
$questions = [];

// Obtener los datos de todas las preguntas y respuestas
while ($row = $resultado->fetch_assoc()) {
    // Guardar las opciones de respuesta en un arreglo
    $options = [$row['respuesta1'], $row['respuesta2'], $row['respuesta3'], $row['respuestaCorrecta']];
    // Mezclar aleatoriamente las opciones de respuesta
    shuffle($options);
    // Guardar la pregunta y las opciones mezcladas
    $questions[] = [
        'question' => $row['pregunta'],
        'options' => $options,
        'correct' => $row['respuestaCorrecta']
    ];
}

while ($row = $resultadob->fetch_assoc()) {
    $beneficio = $row['beneficio'];
}

// Cerrar la conexión a la base de datos
$mysqli->close();
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego: La Búsqueda del Tesoro</title>
    <link rel="stylesheet" href="Tstyles.css">
    <style>
        .options button {
            display: block;
            margin: 5px 0;
        }
        #character1, #character2, #character3 {
            width: 90px;
            height: 90px;
            background: url('imagenes/character1.png') no-repeat center center;
            background-size: contain;
            position: absolute;
            top: 200px;
            left: 200px;
            transition: top 0.5s, left 0.5s;
        }
        #character2, #character3 {
            display: none; /* Ocultar personajes inicialmente */
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="ContenedorMapa4k">
            <div id="mapa4k"></div>
            <div id="character1"></div>
            <div id="character2" style="top: 250px;"></div>
            <div id="character3" style="top: 300px;"></div>
            <div id="como-mejora"><br><br> Beneficios que te dejan esta actividad: <br><br><br><?php echo $beneficio; ?></div>
        </div>
        <div class="ContenedorJuego4k">
            <div id="ContenedorPreguntas4k">
                <?php foreach ($questions as $index => $q): ?>
                    <h3 id="question<?php echo $index; ?>"><?php echo $q['question']; ?></h3>
                    <div class="options" data-correct="<?php echo $q['correct']; ?>">
                        <?php foreach ($q['options'] as $option): ?>
                            <button type="button" onclick="checkAnswer(this)"><?php echo $option; ?></button>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
                <button id="next-button">Siguiente</button>
                <div id="score">
                    Correctas: <span id="correct-count">0</span> |
                    Incorrectas: <span id="incorrect-count">0</span>
                </div>
                <button id="regresar" onclick="location.href='Actividades.html'">Regresar</button>
            </div>
        </div>
    </div>
                        <!-- Aqui este form con tipo hidden envia al finalizar el juego los datos a la pagina 'guardar_puntuación.php'  para
                         despues mandarlo a la bd -->
    <form id="game-form" method="POST" action="guardar_puntuacion.php" style="display: none;">
        <input type="hidden" name="nombreusuario" id="nombreusuario" value="<?php echo $nombreusuario;?>">
        <input type="hidden" name="calificacion" id="calificacion" value="">
    </form>

    <script>
        let currentCharacter = 1;
        const totalQuestions = <?php echo count($questions); ?>;
        let currentQuestion = 0;

        function checkAnswer(button) {
    //Obtiemps el contenedor del botón de respuesta, que es el div con las opciones
    const optionsDiv = button.parentElement;
    
    // Obtiene la respuesta correcta del atributo 'data-correct' del contenedor de opciones
    const correctAnswer = optionsDiv.getAttribute('data-correct');
    
    // Obtiene la respuesta seleccionada por el usuario, que es el texto del botón clicado
    const userAnswer = button.textContent;
    
    // Comprueba si la respuesta del usuario es igual a la respuesta correcta
    if (userAnswer === correctAnswer) {
        // Si es correcta, muestra una alerta indicando que es correcta
        alert('Correcto');
        
        // Cambia el color de fondo del botón a verde
        button.style.backgroundColor = 'green';
        
        // Actualiza el puntaje llamando a la función updateScore con el tipo 'correct'
        updateScore('correct');
    } else {
        // Si es incorrecta, muestra una alerta indicando que es incorrecta
        alert('Incorrecto');
        
        // Cambia el color de fondo del botón a rojo
        button.style.backgroundColor = 'red';
        
        // Actualiza el puntaje llamando a la función updateScore con el tipo 'incorrect'
        updateScore('incorrect');
    }
    
    // Obtiene todos los botones dentro del contenedor de opciones
    const buttons = optionsDiv.getElementsByTagName('button');
    
    // Desactiva todos los botones para evitar que el usuario pueda hacer clic nuevamente
    for (let btn of buttons) {
        btn.disabled = true;
    }
    
    // Comprueba si aún hay más preguntas por mostrar
    if (currentQuestion < totalQuestions - 1) {
        // Incrementa el índice de la pregunta actual
        currentQuestion++;
        
        // Desplaza la vista a la siguiente pregunta usando scrollIntoView
        document.getElementById('question' + currentQuestion).scrollIntoView();
    } else {
        // Si no hay más preguntas, finaliza el juego llamando a la función finishGame
        finishGame();
    }
}

        function updateScore(type) {
    // Obtiene el elemento HTML que muestra el conteo de respuestas correctas
    const correctCount = document.getElementById('correct-count');
    
    //Obtiene el elemento HTML que muestra el conteo de respuestas incorrectas
    const incorrectCount = document.getElementById('incorrect-count');
    
    // Verifica si el tipo de respuesta es 'correct' (correcta)
    if (type === 'correct') {
        // Incrementa el texto del conteo de respuestas correctas en 1
        correctCount.textContent = parseInt(correctCount.textContent) + 1;
        
        // Llama a la función moveCharacter para mover al siguiente personaje
        moveCharacter();
    } else {
        // Incrementa el texto del conteo de respuestas incorrectas en 1
        incorrectCount.textContent = parseInt(incorrectCount.textContent) + 1;
    }
}
       //Función para que el character se 'mueva' apareciendo o desapareciendo otros characters
        function moveCharacter() {
    //Conseguimos el elemento actual del personaje usando el id 'character' seguido del número del personaje actual
    const current = document.getElementById('character' + currentCharacter);
    
    //Mientras que el número del personaje actual sea menor que tres (3)
    if (currentCharacter < 3) {
        //Ocultamos o desaparecemos el personaje actual estableciendo su estilo de display a 'none'
        current.style.display = 'none';
        
        //Incrementa el número del personaje actual en 1
        currentCharacter++;
        
        //Obtiene el siguiente elemento del personaje usando el id 'character' seguido del nuevo número del personaje actual
        const next = document.getElementById('character' + currentCharacter);
        
        //Muestra el siguiente personaje estableciendo su estilo de display a 'block'
        next.style.display = 'block';
    }
}


// esta funcion calcula la calificación, envia los datos a la pagian encargada de mandarlos a la bd y ademas muestra una alerta a el usuario, si gana o no
        function finishGame() {
              // Obtienen¿mos el número de respuestas correctas desde el elemento con id 'correct-count' usando contante 'const'
    const correctCount = parseInt(document.getElementById('correct-count').textContent);
    let calificacion;
    //asignar el porcentaje de la calificación
    if (correctCount === 1) {
        calificacion = "33%";
    } else if (correctCount === 2) {
        calificacion = "66%";
    } else {
        calificacion = "100%";
    }

    // // Enviar el formulario con los datos con el .submit
    document.getElementById('nombreusuario').value = nombreusuario;
    document.getElementById('calificacion').value = calificacion;
    document.getElementById('game-form').submit();

    if (correctCount === 3) {
          // Si si Muestra una alerta indicando que el usuario ha ganado el juego
        alert('¡FELICIDADES! Haz ganado.');
    } else {
         // Si no Muestra una alerta indicando que el usuario debe seguir intentando
        alert('Sigue intentando, vas por buen camino.');
    }
}
       
    </script>
</body>
</html>