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
    <form action="/reservas/actividades" method="POST">
        @csrf
        <div id="error_cantidad" class="alert alert-dismissible alert-danger mt-4" hidden>
            <strong>La cantidad de personas para la cual se desea reservar la actividad es mayor a la cantidad de personas de la cabaña.</strong>
        </div>
        <div class="form-group">
            <label for="numero" class="form-label mt-4">Numero cabaña</label>
            <select id="numero" name="numero" class="form-select" value="{{old('numero')}}" tabindex="1">
                @foreach ($cabanas as $cabana)
                    <option x-data-cant="{{$cabana->capacidad}}" value="{{$cabana->id}}">{{$cabana->numero}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nombre" class="form-label mt-4">Nombre actividad</label>
            <select name="nombre" class="form-select" value="{{old('nombre')}}" tabindex="2">
                @foreach ($actividades as $actividad)
                    <option value="{{$actividad->id}}">{{$actividad->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad_personas" class="form-label mt-4">Cantidad personas</label>
            <input type="text" id="cantidad_personas" name="cantidad_personas" class="form-control" oninput="verificarCantidadPersonas()" value="{{old('cantidad_personas')}}" tabindex="3">
        </div>
        
        <div class="mt-4">
            <button id="guardar" type="submit" class="btn btn-outline-primary" tabindex="4">Guardar</button>
            <a class="btn btn-outline-danger" href="/reservas/actividades" tabindex="5">Cancelar</a>
        </div>
    </form>
</div>
<script>
    function verificarCantidadPersonas(){
        let mensajeError = document.getElementById("error_cantidad");
        let botonGuardar = document.getElementById("guardar");
        let numeroCabana = document.getElementById("numero");
        let cantidad = document.getElementById("cantidad_personas").value;

        capacidadMaxima = parseInt(numeroCabana.options[numeroCabana.selectedIndex].getAttribute('x-data-cant'));

        if(cantidad>capacidadMaxima){
            mensajeError.hidden = false;
            botonGuardar.disabled = true;
        }else{
            mensajeError.hidden = true;
            botonGuardar.disabled = false;
        }
    }
</script>
@endsection