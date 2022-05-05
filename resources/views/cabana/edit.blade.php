@extends('layouts.plantillaBase')

@section('contenido')
@if ($errors->any())
        <div class="card alert-danger mt-4 mx-auto text-center" style="max-width: 20rem;">
            <h4>Ocurrio un error:</h4>
                @foreach ($errors->all() as $error)
                  <br>{{ $error }}
                @endforeach
        </div>
@endif

<div class="container-md">
<form action="/cabanas/{{$cabana->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="numero" class="form-label mt-4">Numero</label>
      <input type="number" id="numero" name="numero" class="form-control" value="{{$cabana->numero}}" tabindex="1">
    </div>
    <div class="form-group">
      <label for="capacidad" class="form-label mt-4">Capacidad</label>
      <input type="number" id="capacidad" name="capacidad" class="form-control" value="{{$cabana->capacidad}}" tabindex="2">
    </div>

    <div class="mt-4">
      <button type="submit" class="btn btn-outline-primary" tabindex="3">Guardar</button>
      <a class="btn btn-outline-danger" href="/cabanas" tabindex="4">Cancelar</a>
    </div>
</form>
</div>
@endsection