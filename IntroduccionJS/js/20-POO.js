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
/**
 * HERENCIA
 */

class Libro extends Producto {
    constructor(nombre, precio, isbn) {
        super(nombre, precio);
        this.isbn = isbn;
    }

    formatearProducto() {
        return `${super.formatearProducto()} y su ISBN es: ${this.isbn}`;
    }
}

const libro = new Libro('JavaScript la Revolucion', 120, '23094823093847');
