@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
  <form action="/actividades" method="POST">
      @csrf
      <div class="form-group">
        <label for="nombre" class="form-label mt-4">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" tabindex="1">
      </div>
      <div class="form-group">
        <label for="descripcion" class="form-label mt-4">Descripcion</label>
        <input type="text" name="descripcion" class="form-control" id="descripcion" tabindex="2">
      </div>
      <div class="form-group">
        <label for="dia" class="form-label mt-4">Dia</label>
        <input type="text" name="dia" class="form-control" id="dia" tabindex="3">
      </div>
      <div class="form-group">
        <label for="horario" class="form-label mt-4">Horario</label>
        <input type="time" name="horario" class="form-control" id="horario" tabindex="4">
      </div>
      <div class="form-group">
        <label for="localizacion" class="form-label mt-4">Localizacion</label>
        <input type="text" name="localizacion" class="form-control" id="localizacion" tabindex="5">
      <div class="mt-4">
        <button type="submit" class="btn btn-outline-primary" tabindex="6">Guardar</button>
        <a class="btn btn-outline-danger" href="/actividades" tabindex="7">Cancelar</a>
      </div>
  </form>
</div>
@endsection