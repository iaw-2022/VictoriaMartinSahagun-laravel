@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Numero</th>
        <th scope="col">Capacidad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody class="table-light">
        @foreach ($cabanas as $cabana)
          <tr>
              <td>{{$cabana->numero}}</td>
              <td>{{$cabana->capacidad}}</td>
              <td>
                  <a class="btn btn-info" href="/cabanas/{{$cabana->id}}/edit">Editar</a>
                  <a class="btn btn-danger">Eliminar</a>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-success" href="/cabanas/create">Crear</a>
</div>
@endsection