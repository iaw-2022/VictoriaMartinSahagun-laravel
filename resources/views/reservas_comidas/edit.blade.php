@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
    <form action="/reservas/comidas/{{$reserva->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="numero" class="form-label mt-4">Numero cabaña</label>
            <input type="number" name="numero" class="form-control" id="numero" value="{{$cabana->numero}}">
        </div>
        <div class="form-group">
            <label for="nombre" class="form-label mt-4">Nombre comida</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{$comida->nombre}}">
        </div>
        <div class="form-group">
            <label for="cantidad_personas" class="form-label mt-4">Cantidad personas</label>
            <input type="number" name="cantidad_personas" class="form-control" id="cantidad_personas" value="{{$reserva->cantidad_personas}}">
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-outline-primary" tabindex="5">Guardar</button>
            <a class="btn btn-outline-danger" href="/reservas/comidas" tabindex="6">Cancelar</a>
        </div>
    </form>
</div>
@endsection