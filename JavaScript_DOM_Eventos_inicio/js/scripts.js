/**
 * Seleccionar elementos con querySelector
 * Retona 0 o 1 Elementos
 * 
 */


const heading = document.querySelector('.header__texto h2');
heading.textContent = 'Nuevo texto';


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