/**
 * fetch API
 * La Fetch API es una interfaz moderna y más versátil en JavaScript para hacer solicitudes HTTP 
 * y manipular las respuestas de manera sencilla. Reemplaza a la más antigua y menos intuitiva 
 * XMLHttpRequest y proporciona una forma más limpia y flexible para interactuar con recursos remotos.
 */

async function obtenerEmpleados() {
    const url = 'empleados.json'
    // fetch(url)
    //     .then(resultado => resultado.json())
    //     .then(datos => {
    //         const { empleados } = datos;
    //         //console.log(empleados);
    //         empleados.forEach(empleado => {
    //             //console.table(empleado);
    //             console.log(empleado.id);
    //             console.log(empleado.puesto);
    //             console.log(empleado.nombre);
    //         });
    //     });

    try {
        const resultado = await fetch(url);
        const datos = await resultado.json();
        console.log(datos);
    } catch (error) {
        console.log(error);
    }
}

obtenerEmpleados();