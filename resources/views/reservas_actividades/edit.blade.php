@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
    <form action="/reservas/actividades/{{$reserva->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="numero" class="form-label mt-4">Numero cabaña</label>
            <input type="number" name="numero" class="form-control" id="numero" value="{{$cabana->numero}}">
        </div>
        <div class="form-group">
            <label for="nombre" class="form-label mt-4">Nombre actividad</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{$actividad->nombre}}">
        </div>
        <div class="form-group">
            <label for="cantidad_personas" class="form-label mt-4">Cantidad personas</label>
            <input type="number" name="cantidad_personas" class="form-control" id="cantidad_personas" value="{{$reserva->cantidad_personas}}">
        </div>
        <label for="localizacion" class="form-label mt-4">Localizacion</label>
        <input type="text" name="localizacion" class="form-control" id="localizacion" value="{{$actividad->localizacion}}">
        <div class="mt-4">
            <button type="submit" class="btn btn-outline-primary" tabindex="5">Guardar</button>
            <a class="btn btn-outline-danger" href="/reservas/actividades" tabindex="6">Cancelar</a>
        </div>
    </form>
</div>
@endsection