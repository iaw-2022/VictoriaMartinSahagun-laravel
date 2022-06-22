@extends('layouts.plantillaBase')

@section('contenido')
<div class="container-md mt-5">
  <table class="table table-hover text-center">
    <thead>
      <tr>
        <th scope="col">Numero cabaña</th>
        <th scope="col">Email huesped</th>
        @if(Auth::user()->rol == 'admin')
          <th scope="col">Acciones</th>
        @endif
      </tr>
    </thead>
    <tbody class="table-light">
      @foreach ($hospedados as $hospedado)
          <tr>  
            <td>{{$cabanas[$hospedado->cabana_id]}}</td>
            <td>{{$huespedes[$hospedado->huesped_id]}}</td>
            @if(Auth::user()->rol == 'admin')
            <td>
              <a class="btn btn-info btn-sm" href="/hospedados/{{$hospedado->id}}/edit">Editar</a>
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{$hospedado->id}}">Eliminar</button>
            </td>
            @endif
          </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-end">
    {{$hospedados->links()}}
  </div>
  <a class="btn btn-success" href="/hospedados/create">Crear</a>
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
          ¿Esta seguro que quiere eliminar a este huesped?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">No, cerrar</button>
            <form id="deleteForm" data-bs-action="/hospedados/" action="" method="POST">
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