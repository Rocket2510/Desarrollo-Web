/**
 * Arreglos o Arrays
 */

const numeros = [10, 20, 30, 40, 50];

//console.table(numeros)

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];
//console.log(meses);

const arreglo = ["Hola", 10, true, "si", null, { nombre: 'edgar', edad: 20 }, [10, 20, "hola", true]];
//console.log(arreglo);

//ACCEDER A VALORES DE UN ARRAY
// console.log(numeros[4]);
// console.log(numeros[2]);

//CONOCER LA EXTENSION DE UN ARREGLO
//console.log(meses.length);

//RECORRER ARREGLOS
// numeros.forEach(function (numero) {
//     console.log(numero);
// });


/**
 * METODOS PARA LOS ARRAYS
 */

//AGREGAR ELEMENTOS A UN ARREGLO
numeros[5] = 60;
console.table(numeros);

numeros.push(70, 80, 90);//agrega al final del arreglo
console.table(numeros);

numeros.unshift(-10, -20, - 30);//agrega al inicio del arreglo
console.table(numeros);

//ELIMINAR ELEMENTOS DE UN ARREGLO
//meses.pop(); //elimina el ultimo elemento de un arreglo
//meses.shift(); //elimina el primer elemento de un arreglo

//meses.splice(2,1) //eliminar un elemento en especifico de un arreglo
//console.table(meses); 

/* No se debe modificar el array original, para eso se crea uno nuevo que si se pueda modificar*/
// Rest Operator o Spread Operator
//const nuevoArreglo = [...meses, 'Junio']; //simula .push
//const nuevoArreglo = ['Junio', ...meses]; //simula .unshift
//console.log(nuevoArreglo);

