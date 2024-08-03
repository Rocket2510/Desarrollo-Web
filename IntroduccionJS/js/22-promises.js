/**
 * PROMISE
 *  Es un objeto que representa la eventual finalización (o falla) de
 *  una operación asincrónica y su valor resultante.
 * 
 * Existen 3 valores posibles:
 *  1.Pending: El promise no se ha cumplido pero tampoco se ha rechazado
 *  2.Fulfille: Ya se cumplio el Promise
 *  3.Reject: Se ha rechazado o no se pudo cumplir
 */

const usuarioAutenticado = new Promise((resolve, reject) => {
    const auth = false;
    if (auth) {
        resolve('Usuario Autenticado'); //El Promise se cumple
    } else {
        reject('No se pudo iniciar sesion');  //El Promise no se cumple
    }
});

usuarioAutenticado
    .then(resultado => console.log(resultado))
    .catch(error => console.log(error));

