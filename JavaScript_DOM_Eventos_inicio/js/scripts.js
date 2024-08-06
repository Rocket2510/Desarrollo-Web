/**
 * Seleccionar elementos con querySelector
 * Retona 0 o 1 Elementos
 * 
 */


const heading = document.querySelector('.header__texto h2');
//heading.textContent = 'Nuevo texto';


/**
 * Seleccionar elementos con querySelectorAll
 * Retorna de 0 a N Elementos
 */

const enlaces = document.querySelectorAll('.navegacion a');

// enlaces[0].textContent = 'Nuevo enlace'
// enlaces[0].href = 'https://www.google.com'
// enlaces[0].classList.add('nueva-clase')
// enlaces[0].classList.remove('nueva-clase')

/**
 * Seleccionar elementos con getElementById
 * Esta forma ya no se utiliza tanto en las nuevas versiones de JavaScript
 */

const heading2 = document.getElementById('heading');

/*---------------------------------------------------*/

/**
 * CREAR HTML CON CREATE ELEMENT
 */

//1. Generar un nuevo enlace
const nuevoEnlace = document.createElement('A')

//2. Agregar el 'href'
nuevoEnlace.href = 'nuevo-enlace.html';

//3. Agregar el texto
nuevoEnlace.textContent = 'nuevo enlace'

//4. Agregar la clase
nuevoEnlace.classList.add('navegacion__enlace');

//5. Agregar al Documento HTML
const navegacion = document.querySelector('.navegacion');
navegacion.appendChild(nuevoEnlace);

/**
 * EVENTOS EN JAVASCRIPT
 * 
 */

//console.log(1);

window.addEventListener('load', function () {
    //'load' espera a que el JS y los archivos que dependen del HTML esten listos
    //console.log(2)
});

window.onload = function () {
    //console.log(3)
}

document.addEventListener('DOMContentLoaded', function () {
    //'DOMContentLoaded' espera a que solo cargue el HTML, pero no espera CSS o imagenes
    //console.log(4);
})

//console.log(5);

window.onscroll = function () {
    //console.log('scrolling...');
}

/**
 * SELECCIONAR ELEMENTOS Y ASOCIARLES UN EVENTO
 */

const btnEnviar = document.querySelector('.boton--primario');

btnEnviar.addEventListener('click', function (evento) {
    console.log(evento.target);
    evento.preventDefault(); //validar formularior 
    console.log('EVIANDO FORMULARIO...');
})

/**
 * EVENTOS DE LOS INPUTS  Y TEXT AREA
 */

const datos = {
    nombre: '',
    email: '',
    mensaje: '',
}

const nombre = document.querySelector('#nombre')
const email = document.querySelector('#email')
const mensaje = document.querySelector('#mensaje')

nombre.addEventListener('input', leerTexto)

email.addEventListener('input', leerTexto)

mensaje.addEventListener('input', leerTexto)

function leerTexto(e) {
    console.log(e.target.value);

    datos[e.target.id] = e.target.value;

    console.log(datos);
}