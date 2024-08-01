/**
 * METODOS DE PROPIEDAD
 */
const reproductor = {
    reproducir: function (id) {
        console.log(`Reproduciendo Canción con el ID: ${id}`);
    },
    pausa: function () {
        console.log('Pausando...')
    },
    crearPlayList: function (nombre) {
        console.log(`Creando la playlist: ${nombre}`)
    },
    reproducirPlayList: function (nombre) {
        console.log(`Reproduciendo la playlist: ${nombre}`)
    },
}

reproductor.borrarCancion = function (id) {
    console.log(`Eliminando la cancion: ${id}`)
}

reproductor.reproducir(3840);
reproductor.pausa();
reproductor.borrarCancion(20);
reproductor.crearPlayList('Rock');
reproductor.reproducirPlayList('Rock');