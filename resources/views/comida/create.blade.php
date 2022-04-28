@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
  <form action="/comidas" method="POST">
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
        <label for="comida" class="form-label mt-4">Comida</label>
        <input type="text" name="comida" class="form-control" id="comida" tabindex="4">
      </div>
    
      <div class="mt-4">
        <button type="sumbit" class="btn btn-outline-primary" tabindex="5">Guardar</button>
        <a class="btn btn-outline-danger" href="/comidas" tabindex="6">Cancelar</a>
      </div>
  </form>
</div>
@endsection