@extends('layouts.plantillaBase')

@section('contenido')

@if ($errors->any())
        <div class="card alert-danger mt-4 mx-auto text-center" style="max-width: 40rem;">
            <h4>Ocurrio un error:</h4>
                @foreach ($errors->all() as $error)
                  <br>{{ $error }}
                @endforeach
        </div>
@endif

<div class="container-md">
  <form action="/actividades" method="POST">
      @csrf
      <div class="form-group">
        <label for="nombre" class="form-label mt-4">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{old('nombre')}}" tabindex="1">
      </div>
      <div class="form-group">
        <label for="descripcion" class="form-label mt-4">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{old('descripcion')}}" tabindex="2">
      </div>
      <div class="form-group">
        <label for="dia" class="form-label mt-4">Dia</label>
        <select name="dia" class="form-select" value="{{old('dia')}}" tabindex="3">
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
        <input type="time" id="horario" name="horario" class="form-control" value="{{old('horario')}}" tabindex="4">
      </div>
      <div class="form-group">
        <label for="localizacion" class="form-label mt-4">Localizacion</label>
        <input type="text" id="localizacion" name="localizacion" class="form-control" value="{{old('localizacion')}}" tabindex="5">
      </div>

      <div class="mt-4">
        <button type="submit" class="btn btn-outline-primary" tabindex="6">Guardar</button>
        <a class="btn btn-outline-danger" href="/actividades" tabindex="7">Cancelar</a>
      </div>
  </form>
</div>
@endsection