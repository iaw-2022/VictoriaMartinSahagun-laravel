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
    <form action="/hospedados" method="POST">
        @csrf
        <div class="form-group">
            <label for="numero" class="form-label mt-4">Numero cabaña</label>
            <select id="numero" name="numero" class="form-select" value="{{old('numero')}}" tabindex="1">
                @foreach ($cabanas as $cabana)
                    <option value="{{$cabana->id}}">{{$cabana->numero}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="email" class="form-label mt-4">Email huesped</label>
            <select name="email" class="form-select" value="{{old('email')}}" tabindex="2">
                @foreach ($huespedes as $huesped)
                    <option value="{{$huesped->id}}">{{$huesped->email}}</option>
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