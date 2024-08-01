/**
 * FUNCIONES CON PARAMETROS Y ARGUMENTOS
 * 
 * 
 */

function sumar(numero1 = 0, numero2 = 0) { //numero1 y numero2 son parametros 
    console.log(numero1 + numero2);
}

// sumar(20, 20); // argumentos o los valores reales 
// sumar(1);

const sumar2 = function (numero1, numero2) {
    console.log(numero1 + numero2);
}

//sumar2(5, 10);

/**
 * FUNCIONES QUE RETORNAN VALORES
 *
 */


function sumar3(num1, num2) {
    return num1 + num2;
}

const resultado = sumar3(2, 3);

console.log(resultado);

let total = 0;
function agregarCarrito(precio) {
    return total += precio;
}

function calcularImpuesto(total) {
    return total * 1.15;
}

total = agregarCarrito(200);
total = agregarCarrito(400);
total = agregarCarrito(600);


console.log(total);

const totalAPagar = calcularImpuesto(total);

console.log(`El total a pagar con impuestos es de: $${totalAPagar}`);
