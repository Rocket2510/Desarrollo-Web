/**
 * Objetos
 */

const producto = {
    nombreProducto: 'Monitor 20 Pulgadas',
    precio: 300,
    disponible: true,
}

console.log(producto);
/* acceder a propiedades del objeto */
// console.log(producto..nombreProducto);
// console.log(producto['precio']);

// AGREGAR NUEVAS PROPIEDADES
producto.imagen = 'imagen.jpg'
//console.log(producto);

//ELIMINAR PROPIEDADES
delete producto.disponible;
console.log(producto);

