
document.addEventListener('DOMContentLoaded', function () {
  const table = document.getElementById('table1');
  
  // Muestra la lista después de 2 segundos (2000 milisegundos)
  setTimeout(() => {
      table1.style.visibility = 'visible';
      
      // Oculta la lista después de otros 3 segundos (3000 milisegundos)
      setTimeout(() => {
          table1.style.visibility = 'hidden';
      }, 20000);
  }, 1000);
});
document.addEventListener('DOMContentLoaded', function () {
  const table = document.getElementById('table1');
  const counter = document.getElementById('counter');
  let count = 20; // Inicializa el contador en 10 segundos

  // Función para actualizar el contador
  function updateCounter() {
      counter.textContent = count;
      if (count > 0) {
          count--;
      } else {
          clearInterval(counterInterval);
          // Ocultar la tabla después de 8 segundos
          setTimeout(() => {
              table.style.visibility = 'hidden';
          }, 2000);
      }
  }

  // Actualiza el contador cada segundo
  const counterInterval = setInterval(updateCounter, 1000);

  // Muestra la tabla después de 5 segundos (5000 milisegundos)
  setTimeout(() => {
      table.style.visibility = 'visible';
  }, 1000);
});




document.addEventListener('DOMContentLoaded', function () {
    const palabras = ["hola", "mundo", "parche", "jabon", "servilleta", "luz", "ventana", "puerta", "cielo", "ojo", "vidrio", "nombre", "animal", "fecha", "ropa", "peluche"];
    const palabrasUsadas = [];

    function obtenerPalabraAleatoria() {
        let palabra;
        do {
            palabra = palabras[Math.floor(Math.random() * palabras.length)];
        } while (palabrasUsadas.includes(palabra));
        palabrasUsadas.push(palabra);
        return palabra;
    }

    const elementosP = document.querySelectorAll("p");
    elementosP.forEach(elemento => {
        elemento.textContent = obtenerPalabraAleatoria();
    });

    // Ocultar las palabras después de 20 segundos
    setTimeout(() => {
        elementosP.forEach(elemento => {
            elemento.style.visibility = 'hidden';
        });
    }, 21000);

    // Guardar las palabras usadas en un campo oculto
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'Juego2.php';

    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'palabrasUsadas';
    input.value = JSON.stringify(palabrasUsadas);

    form.appendChild(input);
    document.body.appendChild(form);

    document.getElementById('btn1').onclick = function() {
        form.submit();
    };
});



document.addEventListener('DOMContentLoaded', function () {
    const div2 = document.getElementById('div2');
    
    // Muestra la lista después de 2 segundos (2000 milisegundos)
    setTimeout(() => {
        div2.style.visibility = 'visible';
    }, 21000);
  });


document.addEventListener('DOMContentLoaded', function () {
    const table = document.getElementById('btn1');

    setTimeout(() => {
        btn1.style.visibility = 'visible';
    }, 22000);
  });
    


