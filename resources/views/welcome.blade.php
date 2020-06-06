@extends('partials.layout')

@section('content')
<h2 class="display-4 text-white">Algoritmo de Naive Bayes</h2>
<h5 class="display-5 text-white">Realizado por Adrián Serrano Brenes</h5>
<h5 class="display-5 text-white">Carnet B36630</h5>

<div class="separator"></div>

<div class="jumbotron">
  <h3 class="text-justified">
    El objetivo general de este sitio es conocer y practicar el algoritmo de Naive Bayes para clasificar personas o cosas.
  </h3>

  <div class="mt-2 d-flex justify-content-center">
    <img id="bayes" src="{{ asset('/img/Bayes.png') }}" alt="bayes" class="img-responsive img-rounded">
  </div>

</div>

@endsection