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

<div class="container-md">
    <form action="/hospedados/{{$hospedado->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="numero" class="form-label mt-4">Numero cabaña</label>
            <select id="numero" name="numero" class="form-select" tabindex="1">
                @foreach ($cabanas as $ca)
                    <option x-data-cant="{{$ca->capacidad}}" value="{{$ca->id}}" {{($cabana->numero == $ca->numero) ? "selected" : ""}}>{{$ca->numero}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="email" class="form-label mt-4">Email</label>
            <select name="email" class="form-select" tabindex="2">
                @foreach ($huespedes as $hu)
                    <option value="{{$hu->id}}" {{($huesped->email == $hu->email) ? "selected" : ""}}>{{$hu->email}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-4">
            <button id="guardar" type="submit" class="btn btn-outline-primary" tabindex="4">Guardar</button>
            <a class="btn btn-outline-danger" href="/hospedados" tabindex="5">Cancelar</a>
        </div>
    </form>
</div>
@endsection