@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Día</th>
        <th scope="col">Horario</th>
        <th scope="col">Más información</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody class="table-light">
        @foreach ($actividades as $actividad)
          <tr>
              <td>{{$actividad->nombre}}</td>
              <td>{{$actividad->dia}}</td>
              <td>{{$actividad->horario}}</td>
              <td>
                <a class="btn btn-primary btn-sm" href="/actividades/{{$actividad->id}}">Ver</a>
              </td>
              <td>
                <form action="/actividades/{{$actividad->id}}" method="POST">
                  <a class="btn btn-info btn-sm" href="/actividades/{{$actividad->id}}/edit">Editar</a>
                  @csrf
                  @method('DELETE') 
                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-success" href="/actividades/create">Crear</a>
<div>
@endsection