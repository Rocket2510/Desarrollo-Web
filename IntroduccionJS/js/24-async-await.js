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

//app();

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

/**
 *  Como trabajar con dos consultas async await?
 */

function descargarUltimosPedidos() {
    return new Promise(resolve => {
        console.log(`DESCARGANDO PEDIDOS...ESPERE...`);

        setTimeout(() => {
            resolve(`Los pedidos fueron Descargados`);
        }, 3000);
    });
}

async function app2() {
    try {
        // console.log('--- trabajando con dos consultas async await... -- ')
        // const clientes = await descargarNuevosClientes();
        // const pedidos = await descargarUltimosPedidos();
        // console.log(clientes);
        // console.log(pedidos);


        //"Promise.all()": Se ejecutan las 2 funciones al mismo tiempo
        const resultado = await Promise.all([descargarNuevosClientes(), descargarUltimosPedidos()]);
        console.log(resultado[0]);
        console.log(resultado[1]);

    } catch (error) {
        console.log(error);
    }
}

app2();

