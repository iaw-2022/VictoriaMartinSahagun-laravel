@extends('layouts.plantillaBase')

@section('contenido')

<div class="card mx-auto mt-5" style="width: 18rem;">
  <img src="{{$comida->img}}" class="card-img-top" alt="{{$comida->nombre}}" style="max-width: 300px;">
  <div class="card-body">
    <h5 class="card-title" style="color:black;">Descripcion</h5>
    <p class="card-text">{{$comida->descripcion}}</p>
  </div>
</div>

@endsection