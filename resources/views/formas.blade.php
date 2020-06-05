@extends('partials.layout')

@section('content')
<h2 class="display-5 text-white">¿Cuál es su forma de aprendizaje?</h2>

<div class="text-white text-justified">
    <p>
        <span class="text-bold">Instrucciones:</span>
        Para adivinar su forma de aprendizaje (divergente, convergente, asimilador, acomodador), usted deberá seleccionar su recinto, su último promedio para matrícula y su sexo.
    </p>
</div>

<div class="separator"></div>

<div class="container text-white">
    <form>
    <div class="form-group">
            <label for="recinto">Seleccione su recinto</label>
            <select class="form-control form-control-lg" id="recinto">
                <option value="Paraiso">Paraíso</option>
                <option value="Turrialba">Turrialba</option>
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

    <button type="button" class="btn btn-warning btn-lg ml-1 mb-1 inline-block vertical-align" onclick="calcularForma();">Calcular</button>
    <h3 class="display-5 text-white ml-3 mb-1 inline-block vertical-align">Su forma de aprendizaje es <span class="text-bold" id="forma"></span></h3>
</div>

<script src="{{ asset('/js/formas.js') }}"></script>

@endsection