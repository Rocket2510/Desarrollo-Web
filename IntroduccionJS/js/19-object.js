/**
 * POO
 * 
 */

/**  OBJECT LITERAL */
const producto = {
    nombre: 'Tablet',
    precio: 500
}

/** Object Constructor */
function Cliente(nombre, apellido) {
    this.nombre = nombre;
    this.apellido = apellido;
}

Cliente.prototype.formatearCliente = function () {
    return `El cliente: ${this.nombre} ${this.apellido}`;
}
function Producto(nombre, precio, stock) {
    this.nombre = nombre;
    this.precio = precio;
    this.stock = stock;
    if (stock > 0) {
        this.stock = true;
    } else {
        this.stock = false;
    }
}

/**
 * PROTOTYPES
 * 
 * Es una función que esta asociada a un tipo de Objeto
 * Nos va a permitir crear funciones que solo se utilizan en un objeto en especifico
 */

Producto.prototype.formatearProducto = function () {
    return `El producto ${this.nombre} tiene un precio de: $ ${this.precio}`;
}

const producto2 = new Producto('Monitor Curvo de 49 Pulgadas', 2000, 12);
const producto3 = new Producto('Laptop', 1000, 1);
const cliente = new Cliente('Edgar', 'Carrillo')

console.log(producto3.formatearProducto());
console.log(cliente.formatearCliente());



