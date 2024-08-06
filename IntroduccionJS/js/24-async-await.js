/**
 * Asinc / Await
 * facilitan el trabajo con código asincrónico en JavaScript. Permiten escribir código asincrónico que se parece al código síncrono,
 *  mejorando la legibilidad y la gestión de promesas.
 * 
 */
function descargarNuevosClientes() {
    return new Promise(resolve => {
        console.log(`DESCARGANDO CLIENTES...ESPERE...`);

        setTimeout(() => {
            resolve(`Los clientes fueron Descargados`);
        }, 5000);
    });
}

/**
 * `async Function+`
 * Una función async es una función que siempre devuelve una Promise. 
 */
async function app() {
    try {
        /**
         * La expresión await se utiliza dentro de una función async y pausa la ejecución 
         * de la función hasta que la promesa se resuelva o se rechace. 
         * await sólo puede usarse dentro de funciones declaradas con async.
         */
        const resultado = await descargarNuevosClientes();
        console.log(resultado);
    } catch (error) {
        console.log(error);
    }
}

app();

//Se ejecuta una vez despues de 'x' tiempo
// setTimeout(function () {
//     //console.log(`set time out`);
//     descargarNuevosClientes();
// }, 5000);

//Se ejecuta cada 'x' tiempo
// setInterval(function () {
//     console.log(`set time out`);
//     //descargarNuevosClientes();
// }, 2000);


