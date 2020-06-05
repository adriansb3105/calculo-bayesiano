let sexos = {};

/**
 * Obtiene todos los registros de la tabla de 'estilos' de la base de datos, y la guarda en formato JSON en la variable 'estilos'
 */
$.ajax({
    type: "GET",
    url: '/api/sexos',
    success: function(data) {
        sexos = data;
    }
});

/**
 * Este método retorna el recinto comparando las entradas del usuario y los registros de la base de datos
 */
function calcularSexo() {
    /**
     * Verifica que los datos ya se hayan cargado de la base de datos
     */
    if (sexos.length) {
        if (esValido()) {
            let estilo = document.getElementById('estilos').value.valueOf();
            let promedio = document.getElementById('promedio').value.valueOf();
            let recinto = document.getElementById('recinto').value.valueOf();

            /**
             * Se crea un arreglo con los valores obtenidos de las respuestas del usuario
             */
            let respuestas = [estilo, promedio, recinto];

            /**
             * Envía por parámetro los valores estilo, promedio, recinto y los sexos de la base de datos a la función que calculará el estilo
             */
            let sexo = euclides(respuestas, sexos);

            /**
             * Indica en la pantalla el estilo resultante
             */
            if (sexo == 'M') {
                sexo = 'Masculino';
            } else {
                sexo = 'Femenino';
            }

            document.getElementById('sexo').innerHTML = sexo;
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