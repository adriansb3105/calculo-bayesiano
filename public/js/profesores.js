let profesores = {};

/**
 * Obtiene todos los registros de la tabla de 'profesores' de la base de datos, y la guarda en formato JSON en la variable 'estilos'
 */
$.ajax({
    type: "GET",
    url: '/api/profesores',
    success: function(data) {
        profesores = data;
    }
});

/**
 * Este método retorna el recinto comparando las entradas del usuario y los registros de la base de datos
 */
function calcularProfesor() {
    /**
     * Verifica que los datos ya se hayan cargado de la base de datos
     */
    if (profesores.length) {
        let edad = document.getElementById('edad').value.valueOf();
        let sexo = document.getElementById('sexo').value.valueOf();
        let evaluacion = document.getElementById('evaluacion').value.valueOf();
        let veces = document.getElementById('veces').value.valueOf();
        let fondo = document.getElementById('fondo').value.valueOf();
        let habilidad = document.getElementById('habilidad').value.valueOf();
        let experiencia = document.getElementById('experiencia').value.valueOf();
        let web = document.getElementById('web').value.valueOf();

        /**
         * Se crea un arreglo con los valores obtenidos de las respuestas del usuario
         */
        let respuestas = [edad, sexo, evaluacion, veces, fondo, habilidad, experiencia, web];

        /**
         * Envía por parámetro los valores edad, sexo, evaluacion, veces, fondo, habilidad, experiencia, web de la base de datos a la función que calculará el estilo
         */
        let profesor = bayes(respuestas, profesores);

        /**
         * Indica en la pantalla el estilo resultante
         */
        if (profesor == 'Beginner') {
            profesor = 'Principiante';
        } else if (profesor == 'Intermediate') {
            profesor = 'Intermedio';
        } else {
            profesor = 'Avanzado';
        }

        document.getElementById('profesor').innerHTML = profesor;
    }
}