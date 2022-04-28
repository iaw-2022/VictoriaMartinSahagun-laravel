@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Numero cabaña</th>
        <th scope="col">Nombre actividades</th>
        <th scope="col">Cantidad personas</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody class="table-light">
      @foreach ($reservas_actividades as $reserva)
      <tr>  
        <td>{{$cabanas[$reserva->cabana_id]}}</td>
        <td>{{$actividades[$reserva->actividad_id]}}</td>
        <td>{{$reserva->cantidad_personas}}</td>
        <td>
          <a class="btn btn-info" href="/reservas/actividades/{{$reserva->id}}/edit">Editar</a>
          <a class="btn btn-danger">Eliminar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-success" href="/reservas/actividades/create">Crear</a>
</div>
@endsection