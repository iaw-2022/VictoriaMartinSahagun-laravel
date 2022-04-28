@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
    <form action="/reservas/actividades" method="POST">
        @csrf
        <div class="form-group">
            <label for="numero" class="form-label mt-4">Numero cabaña</label>
            <input type="number" name="numero" class="form-control" id="numero" tabindex="1">
        </div>
        <div class="form-group">
            <label for="nombre" class="form-label mt-4">Nombre actividad</label>
            <input type="text" name="nombre" class="form-control" id="nombre" tabindex="2">
        </div>
        <div class="form-group">
            <label for="cantidad_personas" class="form-label mt-4">Cantidad personas</label>
            <input type="number" name="cantidad_personas" class="form-control" id="cantidad_personas" tabindex="3">
        </div>
        <label for="localizacion" class="form-label mt-4">Localizacion</label>
        <input type="text" name="localizacion" class="form-control" id="localizacion" tabindex="5">
        <div class="mt-4">
            <button type="sumbit" class="btn btn-outline-primary" tabindex="5">Guardar</button>
            <a class="btn btn-outline-danger" href="/reservas/actividades" tabindex="6">Cancelar</a>
        </div>
    </form>
</div>
@endsection