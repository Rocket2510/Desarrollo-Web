//"use strict"; //ejecuta JS de forma estricta siguiendo buenas practicas
/**
 * Object Methods
 */
const producto = {
    nombreProducto: 'Monitor 20 Pulgadas',
    precio: 300,
    disponible: true,
}

/**
 * Diferencia entre Object.freeze y Object.seal:
 * 
 * Object.freeze:
 * - No permite agregar o eliminar elementos
 * - No permite modificar elementos
 * 
 * Object.seal:
 * - No permite agregar o eliminar elementos
 * - Si permite modificar elementos existentes
 * -
 */

/*
Object.freeze(producto);

producto.imagen = 'imagen.jpg';

delete producto.precio;
*/

/*
Object.seal(producto);
producto.precio = "Nuevo Precio";
*/

console.log(producto);