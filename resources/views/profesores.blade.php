@extends('partials.layout')

@section('content')
<h2 class="display-5 text-white">Tipo de profesor</h2>

<div class="text-white text-justified">
    <p>
        <span class="text-bold">Instrucciones:</span>
        Podrá determinar el tipo de profesor (principiante, intermedio, avanzado) a partir de los siguientes criterios que usted podrá definir.
    </p>
</div>

<div class="separator"></div>

<div class="container text-white">
    <form>
        <div class="form-group">
            <label for="edad">Seleccione su edad</label>
            <select class="form-control form-control-lg" id="edad">
                <option value="1">Menor o igual a 30 años</option>
                <option value="2">Entre 31 a 55 años</option>
                <option value="3">Mayor de 55 años</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sexo">Seleccione su sexo</label>
            <select class="form-control form-control-lg" id="sexo">
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
                <option value="NA">No disponible</option>
            </select>
        </div>

        <div class="form-group">
            <label for="evaluacion">La autoevaluación del profesor de su habilidad o experiencia enseñando la materia seleccionada</label>
            <select class="form-control form-control-lg" id="evaluacion">
                <option value="B">Principiante</option>
                <option value="I">Intermedio</option>
                <option value="A">Avanzado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="veces">Número de veces que el profesor ha impartido este tipo de curso</label>
            <select class="form-control form-control-lg" id="veces">
                <option value="1">Nunca</option>
                <option value="2">De 1 a 5 veces</option>
                <option value="3">Más de 5 veces</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fondo">Disciplina de fondo del profesor o área de especialización</label>
            <select class="form-control form-control-lg" id="fondo">
                <option value="DM">Toma de decisiones</option>
                <option value="ND">Diseño de red</option>
                <option value="O">Otro</option>
            </select>
        </div>

        <div class="form-group">
            <label for="habilidad">Habilidades de los maestros usando computadoras</label>
            <select class="form-control form-control-lg" id="habilidad">
                <option value="L">Bajo</option>
                <option value="A">Promedio</option>
                <option value="H">Alto</option>
            </select>
        </div>

        <div class="form-group">
            <label for="experiencia">Experiencia del docente utilizando tecnología basada en la web para la enseñanza</label>
            <select class="form-control form-control-lg" id="experiencia">
                <option value="N">Nunca</option>
                <option value="S">A veces</option>
                <option value="O">A menudo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="web">La experiencia del profesor utilizando un sitio web</label>
            <select class="form-control form-control-lg" id="web">
                <option value="N">Nunca</option>
                <option value="S">A veces</option>
                <option value="O">A menudo</option>
            </select>
        </div>
    </form>

    <button type="button" class="btn btn-warning btn-lg ml-1 mb-1 inline-block vertical-align" onclick="calcularProfesor();">Calcular</button>
    <h3 class="display-5 text-white ml-3 mb-1 inline-block vertical-align">El tipo de profesor es <span class="text-bold" id="profesor"></span></h3>
</div>

<script src="{{ asset('/js/profesores.js') }}"></script>

@endsection
