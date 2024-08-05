/**
 * Notification API en JavaScript
 * 
 * 
 */

//'document' hace referencia a todo el HTML
const boton = document.querySelector('#boton'); // Selecciona contenido HTML

boton.addEventListener('click', () => {
    Notification.requestPermission()
        .then(resultado => console.log(`El resultado es: ${resultado}`));
});

if (Notification.permission === "granted") {
    new Notification('Esta es una Notificacion', {
        icon: 'img/gato.png',
        body: 'Imagen de Gato',

    });
}





