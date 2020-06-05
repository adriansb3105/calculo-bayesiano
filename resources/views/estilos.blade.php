@extends('partials.layout')

@section('content')
<h2 class="display-5 text-white">¿Cuál es su estilo de aprendizaje?</h2>

<div class="text-white text-justified">
  <p>
    <span class="text-bold">Instrucciones:</span> Debe conceder una calificación alta a aquellas palabras que mejor caracterizan la forma en que usted aprende, y una calificación baja a las palabras que menos caracterizan su estilo de aprendizaje.
  </p>

  <p>
    Le puede ser difícil seleccionar las palabras que mejor describen su estilo de aprendizaje, ya que no hay respuestas correctas o incorrectas. Todas las respuestas son buenas, ya que el fin del instrumento es describir cómo y no juzgar su habilidad para aprender.
  </p>

  <p>
    De inmediato encontrará nueve series o líneas de cuatro palabras cada una. Ordene de mayor a menor cada serie o juego de cuatro palabras que hay en cada línea, ubicando un <span class="text-bold">4</span> en la palabra que mejor caracteriza su estilo de aprendizaje, un <span class="text-bold">3</span> en la palabra siguiente en cuanto a la correspondencia con su estilo; a la siguiente un <span class="text-bold">2</span>, y un <span class="text-bold">1</span> a la palabra que menos caracteriza su estilo. Tenga cuidado de ubicar un número distinto al lado de cada palabra en la misma línea.
  </p>
</div>

<div class="row text-white">
  <div class="mt-3 table-responsive">
    <table class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col" colspan="4">Yo aprendo...</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="btn-group max">
              <select id="c1" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Discerniendo
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c2" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Ensayando
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c3" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Involucrándome
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c4" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Practicando
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="btn-group max">
              <select id="c5" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Receptivamente
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c6" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Relacionando
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c7" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Analíticamente
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c8" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Imparcialmente
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="btn-group max">
              <select id="c9" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Sintiendo
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c10" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Observando
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c11" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Pensando
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c12" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Haciendo
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="btn-group max">
              <select id="c13" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Aceptando
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c14" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Arriesgando
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c15" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Evaluando
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c16" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Con cautela
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="btn-group max">
              <select id="c17" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Intuitivamente
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c18" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Productivamente
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c19" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Lógicamente
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c20" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Cuestionando
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="btn-group max">
              <select id="c21" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Abstracto
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c22" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Observando
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c23" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Concreto
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c24" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Activo
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="btn-group max">
              <select id="c25" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Orientado al presente
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c26" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Reflexivamente
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c27" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Orientado hacia el futuro
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c28" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Pragmático
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="btn-group max">
              <select id="c29" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Aprendo más de la experiencia
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c30" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Aprendo más de la observación
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c31" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Aprendo más de la conceptualización
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c32" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Aprendo más de la experimentación
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="btn-group max">
              <select id="c33" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Emotivo
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c34" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Reservado
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c35" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Racional
            </div>
          </td>
          <td>
            <div class="btn-group max">
              <select id="c36" class="form-control mr-1 col-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              Abierto
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    <button type="button" class="btn btn-warning btn-lg ml-1 mb-1 inline-block vertical-align" onclick="calcularEstilo();">Calcular</button>
    <h3 class="display-5 text-white ml-3 mb-1 inline-block vertical-align">Su estilo de aprendizaje es <span class="text-bold" id="estiloFinal"></span></h3>

  </div>
</div>

<script src="{{ asset('/js/estilos.js') }}"></script>

@endsection