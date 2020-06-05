@extends('partials.layout')

@section('content')
<h2 class="display-5 text-white">¿Cuál es su sexo?</h2>

<div class="text-white text-justified">
    <p>
        <span class="text-bold">Instrucciones:</span>
        Para adivinar su sexo de origen, usted deberá seleccionar su estilo de aprendizaje de los cuatro usados (divergente, convergente, asimilador, acomodador), su último promedio para matrícula y su recinto.
    </p>
</div>

<div class="separator"></div>

<div class="container text-white">
    <form>
        <div class="form-group">
            <label for="estilos">Seleccione su estilo de aprendizaje</label>
            <select class="form-control form-control-lg" id="estilos">
                <option value="DIVERGENTE">Divergente</option>
                <option value="CONVERGENTE">Convergente</option>
                <option value="ASIMILADOR">Asimilador</option>
                <option value="ACOMODADOR">Acomodador</option>
            </select>
        </div>

        <div class="form-group">
            <label for="promedio">Ingrese su último promedio para matrícula</label>
            <input type="email" class="form-control form-control-lg" id="promedio">
        </div>

        <div class="form-group">
            <label for="recinto">Seleccione su recinto</label>
            <select class="form-control form-control-lg" id="recinto">
                <option value="Paraiso">Paraíso</option>
                <option value="Turrialba">Turrialba</option>
            </select>
        </div>
    </form>

    <button type="button" class="btn btn-warning btn-lg ml-1 mb-1 inline-block vertical-align" onclick="calcularSexo();">Calcular</button>
    <h3 class="display-5 text-white ml-3 mb-1 inline-block vertical-align">Su sexo es <span class="text-bold" id="sexo"></span></h3>
</div>

<script src="{{ asset('/js/sexo.js') }}"></script>

@endsection