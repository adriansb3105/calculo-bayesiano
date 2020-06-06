let formas = {};

/**
 * Obtiene todos los registros de la tabla de 'estilos' de la base de datos, y la guarda en formato JSON en la variable 'estilos'
 */
$.ajax({
    type: "GET",
    url: '/api/formas',
    success: function(data) {
        formas = data;
    }
});

/**
 * Este método retorna el recinto comparando las entradas del usuario y los registros de la base de datos
 */
function calcularForma() {
    /**
     * Verifica que los datos ya se hayan cargado de la base de datos
     */
    if (formas.length) {
        if (esValido()) {
            let recinto = document.getElementById('recinto').value.valueOf();
            let promedio = document.getElementById('promedio').value.valueOf();
            let sexo = document.getElementById('sexo').value.valueOf();

            /**
             * Se crea un arreglo con los valores obtenidos de las respuestas del usuario
             */
            let respuestas = [recinto, promedio, sexo];

            /**
             * Envía por parámetro los valores recinto, promedio, sexo y los sexos de la base de datos a la función que calculará el estilo
             */
            let forma = bayes(respuestas, formas);
            /**
             * Indica en la pantalla el estilo resultante
             */
            document.getElementById('forma').innerHTML = forma;
        } else {
            alert("Debe ingresar su último promedio para matrícula");
        }
    }
}

function esValido() {
    let promedio = document.getElementById('promedio').value;

    if (!promedio || isNaN(promedio)) {
        return false;
    } else {
        return true;
    }
}