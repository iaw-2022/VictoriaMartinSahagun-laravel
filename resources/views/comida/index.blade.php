@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Día</th>
        <th scope="col">Tipo</th>
        <th scope="col">Más información</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody class="table-light">
        @foreach ($comidas as $comida)
          <tr>
              <td>{{$comida->nombre}}</td>
              <td>{{$comida->dia}}</td>
              <td>{{$comida->tipo}}</td>
              <td>
                <a class="btn btn-primary btn-sm" href="/comidas/{{$comida->id}}">Ver</a> 
              </td>
              <td>
                <form action="/comidas/{{$comida->id}}" method="POST">
                  <a class="btn btn-info btn-sm" href="/comidas/{{$comida->id}}/edit">Editar</a>
                  @csrf
                  @method('DELETE') 
                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-success" href="/comidas/create">Crear</a>
</div>
@endsection