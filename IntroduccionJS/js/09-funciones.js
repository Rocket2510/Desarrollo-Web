/**
 * FUNCIONES
 * 
 * JS se ejecuta en 2 etapas:
 * 1.- Registro o Creacion: Se registran las funciones 
 * 2.- Ejecucion: Se ejecuta el código 
 */

//DECLARACION DE FUNCION
function sumar() {
    console.log(10 + 10);
}

sumar();

//EXPRESION DE LA FUNCION
const sumar2 = function () {
    console.log(3 + 3);
}

sumar2();

//IIFE
//protege para que no se mezclen las variables y funciones de otros archivos
(function () {
    console.log('Esto es una funcion')
})();

