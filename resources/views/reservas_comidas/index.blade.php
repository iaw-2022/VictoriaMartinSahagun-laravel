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
          <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{$reserva->id}}">Eliminar</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-end">
    {{$reservas_comidas->links()}}
  </div>
  <a class="btn btn-success" href="/reservas/comidas/create">Crear</a>
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
            <form id="deleteForm" data-bs-action="/reservas/comidas/" action="" method="POST">
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