@extends('partials.layout')

@section('content')
<h2 class="display-5 text-white">¿Cuál es su recinto de origen?</h2>

<div class="text-white text-justified">
    <p>
        <span class="text-bold">Instrucciones:</span>
        Para adivinar su recinto de origen, usted deberá seleccionar su estilo de aprendizaje de los cuatro usados (divergente, convergente, asimilador, acomodador), su último promedio para matrícula y su sexo.
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
            <label for="sexo">Seleccione su sexo</label>
            <select class="form-control form-control-lg" id="sexo">
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
            </select>
        </div>
    </form>

    <button type="button" class="btn btn-warning btn-lg ml-1 mb-1 inline-block vertical-align" onclick="calcularRecinto();">Calcular</button>
    <h3 class="display-5 text-white ml-3 mb-1 inline-block vertical-align">Su recinto de origen es <span class="text-bold" id="recintoOrigen"></span></h3>
</div>

<script src="{{ asset('/js/recinto.js') }}"></script>

@endsection