let redes = {};

/**
 * Obtiene todos los registros de la tabla de 'profesores' de la base de datos, y la guarda en formato JSON en la variable 'estilos'
 */
$.ajax({
    type: "GET",
    url: '/api/redes',
    success: function(data) {
        redes = data;
    }
});

/**
 * Este método retorna el recinto comparando las entradas del usuario y los registros de la base de datos
 */
function calcularRed() {
    /**
     * Verifica que los datos ya se hayan cargado de la base de datos
     */
    if (redes.length) {
        let fiabilidad = document.getElementById('fiabilidad').value.valueOf();
        let enlaces = document.getElementById('enlaces').value.valueOf();
        let capacidad = document.getElementById('capacidad').value.valueOf();
        let costo = document.getElementById('costo').value.valueOf();

        /**
         * Se crea un arreglo con los valores obtenidos de las respuestas del usuario
         */
        let respuestas = [fiabilidad, enlaces, capacidad, costo];

        /**
         * Envía por parámetro los valores fiabilidad, enlaces, capacidad, costo de la base de datos a la función que calculará el estilo
         */
        let red = euclides(respuestas, redes);

        /**
         * Indica en la pantalla el estilo resultante
         */
        document.getElementById('red').innerHTML = red;
    }
}