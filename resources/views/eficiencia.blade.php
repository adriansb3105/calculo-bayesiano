@extends('partials.layout')

@section('content')
<h2 class="display-5 text-white">Tipo de profesor</h2>

<div class="text-white text-justified">
    <p>
        <span class="text-bold">Instrucciones:</span>
        
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
    </form>

    <button type="button" class="btn btn-warning btn-lg ml-1 mb-1 inline-block vertical-align" onclick="calcularProfesor();">Calcular</button>
    <h3 class="display-5 text-white ml-3 mb-1 inline-block vertical-align">El tipo de profesor es <span class="text-bold" id="profesor"></span></h3>
</div>

<script src="{{ asset('/js/eficiencia.js') }}"></script>

@endsection
