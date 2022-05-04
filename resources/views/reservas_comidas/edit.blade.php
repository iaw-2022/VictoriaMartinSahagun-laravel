@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md">
    <form action="/reservas/comidas/{{$reserva->id}}" method="POST">
        @method('PUT')
        @csrf
        <div id="error_cantidad" class="alert alert-dismissible alert-danger mt-4" hidden>
            <strong>La cantidad de personas para la cual se desea reservar la comida es mayor a la cantidad de personas de la cabaña.</strong>
        </div>
        <div class="form-group">
            <label for="numero" class="form-label mt-4">Numero cabaña</label>
            <select id="numero" name="nombres" class="form-select" tabindex="1">
                @foreach ($cabanas as $ca)
                    <option x-data-cant="{{$ca->capacidad}}" value="{{$ca->id}}" {{($cabana->numero == $ca->numero) ? "selected" : ""}}>{{$ca->numero}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nombre" class="form-label mt-4">Nombre comida</label>
            <select name="nombres" class="form-select" tabindex="2">
                @foreach ($comidas as $co)
                    <option value="{{$co->id}}" {{($comida->nombre == $co->nombre) ? "selected" : ""}}>{{$co->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad_personas" class="form-label mt-4">Cantidad personas</label>
            <input type="text" id="cantidad_personas" name="cantidad_personas" class="form-control" value="{{$reserva->cantidad_personas}}" oninput="verificarCantidadPersonas()" tabindex="3">
        </div>

        <div class="mt-4">
            <button id="guardar" type="submit" class="btn btn-outline-primary" tabindex="4">Guardar</button>
            <a class="btn btn-outline-danger" href="/reservas/comidas" tabindex="5">Cancelar</a>
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