/**
 * THIS
 * 
 * Hace referencia a las propiedades del objeto
 */

const reservacion = {
    nombre: 'Edgar',
    apellido: 'Carrillo',
    total: 5000,
    pagado: false,
    informacion: function () {
        console.log(`El cliente: ${this.nombre} reservo y su cantidad a pagar es de: ${this.total}`);
    }
}

reservacion.informacion();