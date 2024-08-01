/**
 * Arreglos o Arrays
 */

const numeros = [10, 20, 30, 40, 50];

//console.table(numeros)

const meses = ['Enero', 'Febrero', 'Marzo'];
//console.log(meses);

const arreglo = ["Hola", 10, true, "si", null, { nombre: 'edgar', edad: 20 }, [10, 20, "hola", true]];
//console.log(arreglo);

//ACCEDER A VALORES DE UN ARRAY
// console.log(numeros[4]);
// console.log(numeros[2]);

//CONOCER LA EXTENSION DE UN ARREGLO
//console.log(meses.length);

//RECORRER ARREGLOS
numeros.forEach(function (numero) {
    console.log(numero);
});