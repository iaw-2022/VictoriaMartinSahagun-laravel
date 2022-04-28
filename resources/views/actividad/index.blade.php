@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Día</th>
        <th scope="col">Horario</th>
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
                  <a class="btn btn-primary btn-sm" href="/actividades/{{$actividad->id}}">Mas informacion</a>
                  <a class="btn btn-info btn-sm" href="/actividades/{{$actividad->id}}/edit">Editar</a>
                  <a class="btn btn-danger btn-sm">Eliminar</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-success" href="/actividades/create">Crear</a>
<div>
@endsection