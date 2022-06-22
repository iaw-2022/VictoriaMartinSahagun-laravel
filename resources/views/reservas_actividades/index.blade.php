@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Numero cabaña</th>
        <th scope="col">Nombre actividades</th>
        <th scope="col">Cantidad personas</th>
        @if(Auth::user()->rol == 'admin')
        <th scope="col">Acciones</th>
        @endif
      </tr>
    </thead>
    <tbody class="table-light">
      @foreach ($reservas_actividades as $reserva)
      <tr>  
        <td>{{$cabanas[$reserva->cabana_id]}}</td>
        <td>{{$actividades[$reserva->actividad_id]}}</td>
        <td>{{$reserva->cantidad_personas}}</td>
        @if(Auth::user()->rol == 'admin')
        <td>
          <a class="btn btn-info btn-sm" href="/reservas/actividades/{{$reserva->id}}/edit">Editar</a>
          <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{$reserva->id}}">Eliminar</button>
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-end">
    {{$reservas_actividades->links()}}
  </div>
  @if(Auth::user()->rol == 'admin')
  <a class="btn btn-success" href="/reservas/actividades/create">Crear</a>
  @endif
</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Eliminar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Esta seguro que quiere eliminar esta actividad?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">No, cerrar</button>
            <form id="deleteForm" data-bs-action="/reservas/actividades/" action="" method="POST">
            @csrf
            @method('DELETE') 
                <button class="btn btn-outline-primary btn-sm">Si, eliminar</button>
            </form>
        </div>
      </div>
    </div>
</div>
<!-- Script del Modal -->
<script>
    var deleteModal = document.getElementById('deleteModal')
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var id = button.getAttribute('data-bs-id')     
        var deleteForm = deleteModal.querySelector('#deleteForm')
        var action = deleteForm.getAttribute("data-bs-action")
        deleteForm.setAttribute("action",action+id)
    })
</script>
@endsection