@extends('partials.layout')

@section('content')
<h2 class="display-5 text-white">Clasificación de redes</h2>

<div class="text-white text-justified">
    <p>
        <span class="text-bold">Instrucciones:</span>
        Podrá determinar la clasificación de redes (clases A o B) a partir de los siguientes criterios que usted podrá definir.
    </p>
</div>

<div class="separator"></div>

<div class="container text-white">
    <form>
        <div class="form-group">
            <label for="fiabilidad">La fiabilidad de la red</label>
            <select class="form-control form-control-lg" id="fiabilidad">
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <div class="form-group">
            <label for="enlaces">Número de enlaces</label>
            <select class="form-control form-control-lg" id="enlaces">
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
        </div>

        <div class="form-group">
            <label for="capacidad">Capacidad total de la red</label>
            <select class="form-control form-control-lg" id="capacidad">
                <option value="Low">Baja</option>
                <option value="Medium">Media</option>
                <option value="High">Alta</option>
            </select>
        </div>

        <div class="form-group">
            <label for="costo">Costo de la red</label>
            <select class="form-control form-control-lg" id="costo">
                <option value="Low">Bajo</option>
                <option value="Medium">Medio</option>
                <option value="High">Alto</option>
            </select>
        </div>
    </form>

    <button type="button" class="btn btn-warning btn-lg ml-1 mb-1 inline-block vertical-align" onclick="calcularRed();">Calcular</button>
    <h3 class="display-5 text-white ml-3 mb-1 inline-block vertical-align">La clase de red es <span class="text-bold" id="red"></span></h3>
</div>

<script src="{{ asset('/js/redes.js') }}"></script>

@endsection