@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md">
  <form action="/comidas" method="POST">
      @csrf
      <div class="form-group">
        <label for="nombre" class="form-label mt-4">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" tabindex="1">
      </div>
      <div class="form-group">
        <label for="descripcion" class="form-label mt-4">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="2">
      </div>
      <div class="form-group">
        <label for="dia" class="form-label mt-4">Dia</label>
        <select name="dias" class="form-select" tabindex="3">
            <option value="lunes">Lunes</option>
            <option value="martes">Martes</option>
            <option value="miercoles">Miercoles</option>
            <option value="jueves">Jueves</option>
            <option value="viernes">Viernes</option>
            <option value="sabado">Sabado</option>
            <option value="domingo">Domingo</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tipo" class="form-label mt-4">Tipo</label>
        <select name="driver_3_id" class="form-select" tabindex="4">
            <option value="almuerzo">Almuerzo</option>
            <option value="cena">Cena</option>
        </select>
      </div>
    
      <div class="mt-4">
        <button type="submit" class="btn btn-outline-primary" tabindex="5">Guardar</button>
        <a class="btn btn-outline-danger" href="/comidas" tabindex="6">Cancelar</a>
      </div>
  </form>
</div>
@endsection