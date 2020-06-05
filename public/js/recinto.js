let recintos = {};

/**
 * Obtiene todos los registros de la tabla de 'estilos' de la base de datos, y la guarda en formato JSON en la variable 'estilos'
 */
$.ajax({
    type: "GET",
    url: '/api/recintos',
    success: function(data) {
        recintos = data;
    }
});

/**
 * Este método retorna el recinto comparando las entradas del usuario y los registros de la base de datos
 */
function calcularRecinto() {
    /**
     * Verifica que los datos ya se hayan cargado de la base de datos
     */
    if (estilos.length) {
        if (esValido()) {
            let estilo = document.getElementById('estilos').value.valueOf();
            let promedio = document.getElementById('promedio').value.valueOf();
            let sexo = document.getElementById('sexo').value.valueOf();

            /**
             * Se crea un arreglo con los valores obtenidos de las respuestas del usuario
             */
            let respuestas = [estilo, promedio, sexo];

            /**
             * Envía por parámetro los valores estilo, promedio, sexo y los recintos de la base de datos a la función que calculará el estilo
             */
            let recinto = euclides(respuestas, recintos);

            if (recinto == 'Paraiso') {
                recinto = 'Paraíso';
            }

            /**
             * Indica en la pantalla el estilo resultante
             */
            document.getElementById('recintoOrigen').innerHTML = recinto;
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