@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md">
    <form action="/comidas/{{$comida->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="nombre" class="form-label mt-4">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{$comida->nombre}}" tabindex="1">
      </div>
      <div class="form-group">
        <label for="descripcion" class="form-label mt-4">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$comida->descripcion}}" tabindex="2">
      </div>
      <div class="form-group">
        <label for="dia" class="form-label mt-4">Dia</label>
        <select name="dia" class="form-select" tabindex="3">
            <option value="lunes" {{($comida->dia == 'lunes') ? "selected" : ""}}>Lunes</option>
            <option value="martes" {{($comida->dia == 'martes') ? "selected" : ""}}>Martes</option>
            <option value="miercoles" {{($comida->dia == 'miercoles') ? "selected" : ""}}>Miercoles</option>
            <option value="jueves" {{($comida->dia == 'jueves') ? "selected" : ""}}>Jueves</option>
            <option value="viernes" {{($comida->dia == 'viernes') ? "selected" : ""}}>Viernes</option>
            <option value="sabado" {{($comida->dia == 'sabado') ? "selected" : ""}}>Sabado</option>
            <option value="domingo" {{($comida->dia == 'domingo') ? "selected" : ""}}>Domingo</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tipo" class="form-label mt-4">Tipo</label>
        <select name="driver_3_id" class="form-select" tabindex="4">
            <option value="almuerzo" {{($comida->tipo == 'almuerzo') ? "selected" : ""}}>Almuerzo</option>
            <option value="cena" {{($comida->tipo == 'cena') ? "selected" : ""}}>Cena</option>
        </select>
      </div>
    
      <div class="mt-4">
        <button type="submit" class="btn btn-outline-primary">Guardar</button>
        <a class="btn btn-outline-danger" href="/comidas">Cancelar</a>
      </div>
    </form>
</div>
@endsection