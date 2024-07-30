/**
 * String o cadenas de texto
 */
const producto = "Monitor de 20 pulgadas"
// const producto2 = String('Monitor 30 pulgadas');
// const producto3 = new String('Monitor 30 pulgadas');

/**
 * Metodos para Strings
 */
const tweet = 'Aprendiendo JavaScript';
const producto3 = 'Monitor LG';

//.length para saber la extension en un String
console.log(tweet.length);
//.indexOf para encontrar un elemento en un String
console.log(producto3.indexOf('LG'));
console.log(tweet.indexOf('JavaScript'));
//Includes (return boolean)
console.log(producto3.includes('LG'));
console.log(tweet.includes('JvaScript'));

/**
 * Numeros y operadores
 */
const num1 = 100;
const num2 = 200;
const num3 = 200.20;
const num4 = .1020;
const num5 = -5;

console.log(num1);
console.log(num2);
console.log(num3);
console.log(num4);
console.log(num5);

console.log("suma:", num1 + num2);
console.log("resta:", num2 - num1);
console.log("mult:", num2 * num1);
console.log("div:", num2 / num1);
console.log("modulo:", num2 % num1);

