@extends('layouts.plantillaBase')

@section('contenido')

<div class="card mx-auto mt-5" style="width: 18rem;">
  <img src="{{$actividad->img}}" class="card-img-top" alt="{{$actividad->nombre}}" style="max-width: 300px;">
  <div class="card-body">
    <h5 class="card-title" style="color:black;" >Descripcion</h5>
    <p class="card-text">{{$actividad->descripcion}}</p>
  </div>
  <div class="card-body">
    <h5 class="card-title" style="color:black;">Localizacion</h5>
    <p class="card-text">{{$actividad->localizacion}}</p>
  </div>
</div>

@endsection