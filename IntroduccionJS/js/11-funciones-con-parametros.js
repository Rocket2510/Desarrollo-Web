/**
 * FUNCIONES CON PARAMETROS Y ARGUMENTOS
 * 
 * 
 */

function sumar(numero1 = 0, numero2 = 0) { //numero1 y numero2 son parametros 
    console.log(numero1 + numero2);
}

sumar(20, 20); // argumentos o los valores reales 
sumar(1);

const sumar2 = function (numero1, numero2) {
    console.log(numero1 + numero2);
}

sumar2(5, 10);