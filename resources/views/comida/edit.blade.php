@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
    <form action="/comidas/{{$comida->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="nombre" class="form-label mt-4">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre"value="{{$comida->nombre}}">
      </div>
      <div class="form-group">
        <label for="descripcion" class="form-label mt-4">Descripcion</label>
        <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{$comida->descripcion}}">
      </div>
      <div class="form-group">
        <label for="dia" class="form-label mt-4">Dia</label>
        <input type="text" name="dia" class="form-control" id="dia" value="{{$comida->dia}}">
      </div>
      <div class="form-group">
        <label for="comida" class="form-label mt-4">Comida</label>
        <input type="text" name="comida" class="form-control" id="comida" value="{{$comida->comida}}">
      </div>
    
      <div class="mt-4">
        <button type="submit" class="btn btn-outline-primary">Guardar</button>
        <a class="btn btn-outline-danger" href="/comidas">Cancelar</a>
      </div>
    </form>
</div>
@endsection