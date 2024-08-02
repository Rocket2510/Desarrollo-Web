/**
 * Try-Catch
 * 
 * se utiliza para manejar errores que pueden ocurrir durante la ejecución 
 * de un bloque de código. Permite a los desarrolladores controlar el flujo del programa 
 * y proporcionar respuestas adecuadas a errores inesperados, en lugar de dejar 
 * que el programa falle abruptamente.
 */

const numero1 = 20;
const numero3 = 30;

console.log(numero1)

try{
    console.log(numero2)
}catch(error){
    console.log(error.message);
}

console.log(numero3)
