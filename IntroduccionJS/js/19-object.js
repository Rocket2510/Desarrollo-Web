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

const producto2 = new Producto('Monitor Curvo de 49 Pulgadas', 2000, 12);
const producto3 = new Producto('Laptop', 1000, 1);

