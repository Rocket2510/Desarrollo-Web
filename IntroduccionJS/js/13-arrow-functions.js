/**
 * ARROW FUNCTIONS
 */

// const sumar2 = function (n1, n2) {
//     console.log(n1 + n2);
// }

const sumar2 = (n1, n2) => console.log(n1 + n2);

sumar2(5, 10);

const aprendiendo = tecnologia => console.log(`Aprendiendo ${tecnologia}`)

aprendiendo('Java Script');

//-----------------------
const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

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
meses.forEach(mes => {
    if (mes == 'Marzo') {
        console.log("Marzo si existe");
    }
});

//'Some' ideal para arreglo de objetos
let resultado = 0;
resultado = carrito.some(producto => producto.nombre === 'Celular PRO'); //true || false 

//'Reduce'
resultado = carrito.reduce((total, producto) => total + producto.precio, 0);

//'Filter'
resultado = carrito.filter(producto => producto.precio > 400);

resultado = carrito.filter(producto => producto.nombre !== 'Celular');

console.log(resultado);