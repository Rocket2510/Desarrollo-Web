/**
 * Arreglos o Arrays
 */

const numeros = [10, 20, 30, 40, 50];

//console.table(numeros)

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];
//console.log(meses);

const arreglo = ["Hola", 10, true, "si", null, { nombre: 'edgar', edad: 20 }, [10, 20, "hola", true]];
//console.log(arreglo);

//ACCEDER A VALORES DE UN ARRAY
// console.log(numeros[4]);
// console.log(numeros[2]);

//CONOCER LA EXTENSION DE UN ARREGLO
//console.log(meses.length);

//RECORRER ARREGLOS
// numeros.forEach(function (numero) {
//     console.log(numero);
// });


/**
 * METODOS PARA LOS ARRAYS
 */

//AGREGAR ELEMENTOS A UN ARREGLO
// numeros[5] = 60;
// console.table(numeros);

// numeros.push(70, 80, 90);//agrega al final del arreglo
// console.table(numeros);

// numeros.unshift(-10, -20, - 30);//agrega al inicio del arreglo
// console.table(numeros);

//ELIMINAR ELEMENTOS DE UN ARREGLO
//meses.pop(); //elimina el ultimo elemento de un arreglo
//meses.shift(); //elimina el primer elemento de un arreglo

//meses.splice(2,1) //eliminar un elemento en especifico de un arreglo
//console.table(meses); 

/* No se debe modificar el array original, para eso se crea uno nuevo que si se pueda modificar*/
// Rest Operator o Spread Operator
//const nuevoArreglo = [...meses, 'Junio']; //simula .push
//const nuevoArreglo = ['Junio', ...meses]; //simula .unshift
//console.log(nuevoArreglo);

/**
 * MAS METODOS PARA LOS ARRAYS
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

//'forEach'
meses.forEach(function (mes) {
    if (mes == 'Marzo') {
        console.log("Marzo si existe");
    }
});

//'Includes'
let resultado = meses.includes('Marzo'); // : true (Si existe Marzo)

//'Some' ideal para arreglo de objetos
resultado = carrito.some(function (producto) {
    return producto.nombre === 'Celular' //true || false 
});

//'Reduce'
resultado = carrito.reduce(function (total, producto) {
    return total + producto.precio;  
}, 0);

//'Filter'
resultado = carrito.filter(function (producto) {
    return producto.precio > 400;
});

resultado = carrito.filter(function (producto) {
    return producto.nombre === 'Celular';
});
console.log(resultado); // 
