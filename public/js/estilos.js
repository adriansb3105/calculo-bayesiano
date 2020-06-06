let estilos = {};

/**
 * Obtiene todos los registros de la tabla de 'estilos' de la base de datos, y la guarda en formato JSON en la variable 'estilos'
 */
$.ajax({
    type: "GET",
    url: '/api/estilos',
    success: function(data) {
        estilos = data;
    }
});

/**
 * Este método retorna el estilo de aprendizaje comparando las entradas del usuario y los registros de la base de datos
 */
function calcularEstilo() {
    /**
     * Verifica que los datos ya se hayan cargado de la base de datos
     */
    if (estilos.length) {
        /**
         * Las variables ec, ca, ea, or son los resultados de sumar los valores que seleccionó el usuario en las cuatro columnas
         */
        let ec = parseInt(document.getElementById('c5').value) + parseInt(document.getElementById('c9').value) + parseInt(document.getElementById('c13').value) + parseInt(document.getElementById('c17').value) + parseInt(document.getElementById('c25').value) + parseInt(document.getElementById('c29').value);

        let ca = parseInt(document.getElementById('c7').value) + parseInt(document.getElementById('c11').value) + parseInt(document.getElementById('c15').value) + parseInt(document.getElementById('c19').value) + parseInt(document.getElementById('c31').value) + parseInt(document.getElementById('c35').value);

        let ea = parseInt(document.getElementById('c4').value) + parseInt(document.getElementById('c12').value) + parseInt(document.getElementById('c24').value) + parseInt(document.getElementById('c28').value) + parseInt(document.getElementById('c32').value) + parseInt(document.getElementById('c36').value);

        let or = parseInt(document.getElementById('c2').value) + parseInt(document.getElementById('c10').value) + parseInt(document.getElementById('c22').value) + parseInt(document.getElementById('c26').value) + parseInt(document.getElementById('c30').value) + parseInt(document.getElementById('c34').value);

        /**
         * Se crea un arreglo con los valores obtenidos de las respuestas del usuario
         */
        let respuestas = [ca, ec, ea, or];

        /**
         * Envía por parámetro los valores ca, ec, ea, or y los estilos de la base de datos a la función que calculará el estilo
         */
        let estilo = bayes(respuestas, estilos);

        /**
         * Indica en la pantalla el estilo resultante
         */
        document.getElementById('estiloFinal').innerHTML = estilo;
    }
}