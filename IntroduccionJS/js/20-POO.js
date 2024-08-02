/**
 * Classes en JS
 */

class Producto {
    constructor(nombre, precio) {
        this.nombre = nombre;
        this.precio = precio;
    }

    formatearProducto() {
        return `El producto ${this.nombre} tiene un precio de: $ ${this.precio}`;
    }

    getPrecio() {
        return `Precio: $ ${this.precio}`
    }
}

const producto2 = new Producto('Monitor Curvo de 49 Pulgadas', 2000, 12);
const producto3 = new Producto('Laptop', 1000, 1);

/**
 * HERENCIA
 */

