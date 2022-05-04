@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md">
    <form action="/reservas/actividades" method="POST">
        @csrf
        <div id="error_cantidad" class="alert alert-dismissible alert-danger mt-4" hidden>
            <strong>La cantidad de personas para la cual se desea reservar la actividad es mayor a la cantidad de personas de la cabaña.</strong>
        </div>
        <div class="form-group">
            <label for="numero" class="form-label mt-4">Numero cabaña</label>
            <select id="numero" name="numeros" class="form-select" tabindex="1">
                @foreach ($cabanas as $cabana)
                    <option x-data-cant="{{$cabana->capacidad}}" value="{{$cabana->id}}">{{$cabana->numero}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nombre" class="form-label mt-4">Nombre actividad</label>
            <select name="nombres" class="form-select" tabindex="2">
                @foreach ($actividades as $actividad)
                    <option value="{{$actividad->id}}">{{$actividad->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad_personas" class="form-label mt-4">Cantidad personas</label>
            <input type="text" id="cantidad_personas" name="cantidad_personas" class="form-control" tabindex="3" oninput="verificarCantidadPersonas()">
        </div>
        <label for="localizacion" class="form-label mt-4">Localizacion</label>
        <input type="text" id="localizacion" name="localizacion" class="form-control" tabindex="4">
        
        <div class="mt-4">
            <button id="guardar" type="submit" class="btn btn-outline-primary" tabindex="5">Guardar</button>
            <a class="btn btn-outline-danger" href="/reservas/actividades" tabindex="6">Cancelar</a>
        </div>
    </form>
</div>
@endsection
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