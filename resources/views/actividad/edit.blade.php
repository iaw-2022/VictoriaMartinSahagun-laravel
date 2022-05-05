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

<div class="container-md mt-5">
    <form action="/actividades/{{$actividad->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
        <label for="nombre" class="form-label mt-4">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{$actividad->nombre}}" tabindex="1">
      </div>
      <div class="form-group">
        <label for="descripcion" class="form-label mt-4">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$actividad->descripcion}}" tabindex="2">
      </div>
      <div class="form-group">
        <label for="dia" class="form-label mt-4">Dia</label>
        <select name="dia" class="form-select" tabindex="3">
            <option value="lunes" {{($actividad->dia == 'lunes') ? "selected" : ""}}>Lunes</option>
            <option value="martes" {{($actividad->dia == 'martes') ? "selected" : ""}}>Martes</option>
            <option value="miercoles" {{($actividad->dia == 'miercoles') ? "selected" : ""}}>Miercoles</option>
            <option value="jueves" {{($actividad->dia == 'jueves') ? "selected" : ""}}>Jueves</option>
            <option value="viernes" {{($actividad->dia == 'viernes') ? "selected" : ""}}>Viernes</option>
            <option value="sabado" {{($actividad->dia == 'sabado') ? "selected" : ""}}>Sabado</option>
            <option value="domingo" {{($actividad->dia == 'domingo') ? "selected" : ""}}>Domingo</option>
        </select>
      </div>
      <div class="form-group">
        <label for="horario" class="form-label mt-4">Horario</label>
        <input type="time" id="horario" name="horario" class="form-control" value="{{$actividad->horario}}" tabindex="4">
      </div>
      <div class="form-group">
        <label for="localizacion" class="form-label mt-4">Localizacion</label>
        <input type="text" id="localizacion" name="localizacion" class="form-control" value="{{$actividad->localizacion}}" tabindex="5">
      
        <div class="mt-4">
        <button type="submit" class="btn btn-outline-primary" tabindex="6">Guardar</button>
        <a class="btn btn-outline-danger" href="/actividades" tabindex="7">Cancelar</a>
      </div>
    </form>
</div>
@endsection