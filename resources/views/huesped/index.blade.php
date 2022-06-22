@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody class="table-light">
      @foreach ($huespedes as $huesped)
      <tr>  
        <td>{{$huesped->id}}</td>
        <td>{{$huesped->nombre}}</td>
        <td>{{$huesped->email}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-end">
    {{$huespedes->links()}}
  </div>
</div>
@endsection