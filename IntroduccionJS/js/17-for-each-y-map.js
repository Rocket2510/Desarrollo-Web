/**
 * forEach y Map
 * 
 * Solo se pueden ejecutar en arrays
 * 
 * Retorno:
 * 
 *   -ForEach: No retorna un valor (retorna undefined).
 *   -map: Retorna un nuevo array con los resultados de aplicar la función a cada elemento del array original.
 * 
 * Uso:
 *
 *  -forEach: Ideal para realizar efectos secundarios (side effects), como mutar elementos del array, imprimir en la consola, etc.
 *  -map: Ideal para transformar datos sin modificar el array original.
 * 
 * Mutabilidad:
 * 
 * -forEach: Puede modificar el array original si los elementos son mutados dentro de la función de callback.
 *  -map: No modifica el array original, siempre retorna un nuevo array.
 */

const carrito = [
    { nombre: 'Monitor 20 Pulgadas', precio: 500, },
    { nombre: 'Television 50 Pulgadas', precio: 700, },
    { nombre: 'Tablet', precio: 300, },
    { nombre: 'Audifonos', precio: 200, },
    { nombre: 'Teclado', precio: 50, },
    { nombre: 'Celular', precio: 500, },
    { nombre: 'Bocinas', precio: 300, },
    { nombre: 'Laptop', precio: 800, },
]

//forEach
carrito.forEach(producto => console.log(producto.nombre));

//map
//const arreglo2 = carrito.map(producto => (producto.nombre));
const arreglo2 = carrito.map(producto => `${producto.nombre} - ${producto.precio}`);

console.log(arreglo2);