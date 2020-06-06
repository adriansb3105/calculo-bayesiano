localStorage.clear();

function bayes(respuestas, datos) {

    datos.forEach(function(datoActual) {
        datoActual = Object.values(datoActual);

        var valor = datoActual[datoActual.length - 1];
        datoActual.pop();

        Bayes.entrenar(datoActual, valor);
    });

    var puntajes = Bayes.adivinar(respuestas);

    return Bayes.ganador(puntajes);
}

var Bayes = (function(Bayes) {
    Array.prototype.unique = function() {
        var a = {},
            b = [];
        for (var i = 0, l = this.length; i < l; ++i) {
            if (a.hasOwnProperty(this[i])) {
                continue;
            }
            b.push(this[i]);
            a[this[i]] = 1;
        }
        return b;
    }
    var claveRaiz = function(raiz, etiqueta) {
        return '_Bayes::raiz:' + raiz + '::etiqueta:' + etiqueta;
    };
    var claveContadorDocumentos = function(etiqueta) {
        return '_Bayes::contadorDocumento:' + etiqueta;
    };
    var claveContadorRaiz = function(raiz) {
        return '_Bayes::stemCount:' + raiz;
    };

    var token = function(texto) {
        return texto;
    };

    var obtenerEtiquetas = function() {
        var etiquetas = localStorage.getItem('_Bayes::etiquetasRegistradas');
        if (!etiquetas) etiquetas = '';
        return etiquetas.split(',').filter(function(a) {
            return a.length;
        });
    };

    var registrarEtiquetas = function(etiqueta) {
        var etiquetas = obtenerEtiquetas();
        if (etiquetas.indexOf(etiqueta) === -1) {
            etiquetas.push(etiqueta);
            localStorage.setItem('_Bayes::etiquetasRegistradas', etiquetas.join(','));
        }
        return true;
    };

    var contadorEtiquetasRaiz = function(raiz, etiqueta) {
        var contador = parseInt(localStorage.getItem(claveRaiz(raiz, etiqueta)));
        if (!contador) contador = 0;
        return contador;
    };
    var contadorEtiquetasRaizInverso = function(raiz, etiqueta) {
        var etiquetas = obtenerEtiquetas();
        var total = 0;
        for (var i = 0, length = etiquetas.length; i < length; i++) {
            if (etiquetas[i] === etiqueta)
                continue;
            total += parseInt(contadorEtiquetasRaiz(raiz, etiquetas[i]));
        }
        return total;
    };

    var contadorRaizTotal = function(raiz) {
        var contador = parseInt(localStorage.getItem(claveContadorRaiz(raiz)));
        if (!contador) contador = 0;
        return contador;
    };
    var contadorDocumento = function(etiqueta) {
        var contador = parseInt(localStorage.getItem(claveContadorDocumentos(etiqueta)));
        if (!contador) contador = 0;
        return contador;
    };
    var contadorDocumentosInverso = function(etiqueta) {
        var etiquetas = obtenerEtiquetas();
        var total = 0;
        for (var i = 0, length = etiquetas.length; i < length; i++) {
            if (etiquetas[i] === etiqueta)
                continue;
            total += parseInt(contadorDocumento(etiquetas[i]));
        }
        return total;
    };
    var incremento = function(clave) {
        var contador = parseInt(localStorage.getItem(clave));
        if (!contador) contador = 0;
        localStorage.setItem(clave, parseInt(contador) + 1);
        return contador + 1;
    };

    var incrementoRaiz = function(raiz, etiqueta) {
        incremento(claveContadorRaiz(raiz));
        incremento(claveRaiz(raiz, etiqueta));
    };

    var incrementoContadorDocumentos = function(etiqueta) {
        return incremento(claveContadorDocumentos(etiqueta));
    };

    Bayes.entrenar = function(texto, etiqueta) {
        registrarEtiquetas(etiqueta);
        var palabras = token(texto);
        var length = palabras.length;
        for (var i = 0; i < length; i++)
            incrementoRaiz(palabras[i], etiqueta);
        incrementoContadorDocumentos(etiqueta);
    };

    Bayes.adivinar = function(texto) {
        var palabras = token(texto);
        var length = palabras.length;
        var etiquetas = obtenerEtiquetas();
        var contadorDocumentosTotales = 0;
        var contadorDocumentos = {};
        var contadorDocumentosInversos = {};
        var puntajes = {};
        var probabilidadEtiqueta = {};

        for (var j = 0; j < etiquetas.length; j++) {
            var etiqueta = etiquetas[j];
            contadorDocumentos[etiqueta] = contadorDocumento(etiqueta);
            contadorDocumentosInversos[etiqueta] = contadorDocumentosInverso(etiqueta);
            contadorDocumentosTotales += parseInt(contadorDocumentos[etiqueta]);
        }

        for (var j = 0; j < etiquetas.length; j++) {
            var etiqueta = etiquetas[j];
            var logSuma = 0;
            probabilidadEtiqueta[etiqueta] = contadorDocumentos[etiqueta] / contadorDocumentosTotales;

            for (var i = 0; i < length; i++) {
                var palabra = palabras[i];
                var _contadorRaizTotal = contadorRaizTotal(palabra);
                if (_contadorRaizTotal === 0) {
                    continue;
                } else {
                    var probabilidadPalabra = contadorEtiquetasRaiz(palabra, etiqueta) / contadorDocumentos[etiqueta];
                    var probabilidadPalabraInversa = contadorEtiquetasRaizInverso(palabra, etiqueta) / contadorDocumentosInversos[etiqueta];
                    var palabraClasificada = probabilidadPalabra / (probabilidadPalabra + probabilidadPalabraInversa);

                    palabraClasificada = ((1 * 0.5) + (_contadorRaizTotal * palabraClasificada)) / (1 + _contadorRaizTotal);
                    if (palabraClasificada === 0)
                        palabraClasificada = 0.01;
                    else if (palabraClasificada === 1)
                        palabraClasificada = 0.99;
                }

                logSuma += (Math.log(1 - palabraClasificada) - Math.log(palabraClasificada));
            }
            puntajes[etiqueta] = 1 / (1 + Math.exp(logSuma));
        }
        return puntajes;
    };

    Bayes.ganador = function(puntajes) {
        var mejorPuntaje = 0;
        var mejorEtiqueta = null;
        for (var etiqueta in puntajes) {
            if (puntajes[etiqueta] > mejorPuntaje) {
                mejorPuntaje = puntajes[etiqueta];
                mejorEtiqueta = etiqueta;
            }
        }

        return mejorEtiqueta;
    };

    return Bayes;
})(Bayes || {});