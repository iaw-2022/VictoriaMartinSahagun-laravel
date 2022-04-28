@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
    <form action="/actividades/{{$actividad->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
        <label for="nombre" class="form-label mt-4">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="{{$actividad->nombre}}">
      </div>
      <div class="form-group">
        <label for="descripcion" class="form-label mt-4">Descripcion</label>
        <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{$actividad->descripcion}}">
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
        <label for="horario" class="form-label mt-4">Horario</label>
        <input type="time" name="horario" class="form-control" id="horario" value="{{$actividad->horario}}">
      </div>
      <div class="form-group">
        <label for="localizacion" class="form-label mt-4">Localizacion</label>
        <input type="text" name="localizacion" class="form-control" id="localizacion" value="{{$actividad->localizacion}}">
      <div class="mt-4">
        <button type="submit" class="btn btn-outline-primary" tabindex="6">Guardar</button>
        <a class="btn btn-outline-danger" href="/actividades" tabindex="7">Cancelar</a>
      </div>
    </form>
</div>
@endsection