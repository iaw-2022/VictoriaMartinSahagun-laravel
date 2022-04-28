@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
<form action="/cabanas" method="POST">
    @csrf
    <div class="form-group">
      <label for="numero" class="form-label mt-4">Numero</label>
      <input type="number" name="numero" class="form-control" id="numero" tabindex="1">
    </div>
    <div class="form-group">
      <label for="capacidad" class="form-label mt-4">Capacidad</label>
      <input type="number" name="capacidad" class="form-control" id="capacidad" tabindex="2">
    </div>
    
    <div class="mt-4">
      <button type="sumbit" class="btn btn-outline-primary" tabindex="3">Guardar</button>
      <a class="btn btn-outline-danger" href="/cabanas" tabindex="4">Cancelar</a>
    </div>
</form>
</div>
@endsection