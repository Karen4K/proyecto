// Código JavaScript
const menuItems = document.querySelectorAll('.BarraMenu li a');

menuItems.forEach(menuItem => {
  menuItem.addEventListener('click', (event) => {
    event.preventDefault(); // Prevenir la recarga de página
    const href = menuItem.getAttribute('href');
    history.pushState(null, null, href); // Actualizar el historial
    // Cargar el contenido de la página
  });
});
// Código JavaScript
const imageLinks = document.querySelectorAll('.image-links a');

imageLinks.forEach(imageLink => {
  imageLink.addEventListener('click', (event) => {
    event.preventDefault(); // Prevenir la recarga de página
    const href = imageLink.getAttribute('href');
    history.pushState(null, null, href); // Actualizar el historial
    // Cargar el contenido de la página
  });
});
