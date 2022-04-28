@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Numero cabaña</th>
        <th scope="col">Nombre comida</th>
        <th scope="col">Cantidad personas</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody class="table-light">
      @foreach ($reservas_comidas as $reserva)
      <tr>  
        <td>{{$cabanas[$reserva->cabana_id]}}</td>
        <td>{{$comidas[$reserva->comida_id]}}</td>
        <td>{{$reserva->cantidad_personas}}</td>
        <td>
          <a class="btn btn-info btn-sm" href="/reservas/comidas/{{$reserva->id}}/edit">Editar</a>
          <a class="btn btn-danger btn-sm">Eliminar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-success" href="/reservas/comidas/create">Crear</a>
</div>
@endsection