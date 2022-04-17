@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Modelos</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="{{route('modelos.create')}}" class="btn btn-primary mr-3">Agregar Modelo</a>
            </div>
        </div>
    </div>
</div>
<!-- FIN CABECERA -->





<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-vcenter text-wrap table-bordered border-bottom dt" id="project-list">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">ID</th>
                                <th class="border-bottom-0">Nombre del modelo</th>
                                <th class="border-bottom-0">Tipo de modelo</th>
                                <th class="border-bottom-0">Fecha</th>
                                <th class="border-bottom-0" Style="text-align: center;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $model)
                            <tr>    
                                <td>{{$model->id}}</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">{{$model->name}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span>
                                        {{$model->type_model->name}}
                                    </span>
                                </td>
                                <td>
                                    <span>{{$model->created_at}}</span>
                                </td>
                                <td>
                                <div class="d-flex">
                                        <a href="{{route('modelos.show',$model->id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="fa-solid fa-eye text-primary"></i></a>
                                        <a href="{{route('modelos.edit',$model->id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen text-success"></i></a>
                                        <form action="{{route('modelos.destroy', $model->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="action-btns1" onclick="mensaje()" data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit"><i class="fa fa-trash-o text-danger"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>        
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection

@section('extra-script')
<script type="text/javascript">
    function mensaje(){
        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-outline-dark'
          },
          buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
          title: '¿Eliminar modelo?',
          text: "El modelo se eliminará permanentemente del sistema.",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Si, eliminar modelo!.',
          cancelButtonText: 'No, mantener modelo!.',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
              'Eliminado!',
              'El modelo se ha eliminado correctamente.',
              'success'
            )
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Proceso cancelado.',
              '',
              'error'
            )
          }
        })
    }
</script>
@endsection
