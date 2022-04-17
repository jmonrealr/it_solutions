@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Contratos</h4>
    </div>
    {{-- DESCOMENTAR DIV PARA MOSTRAR BOTON DE AGREGAR --}}
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="{{ route('contratos.create') }}" class="btn btn-primary mr-3">
                    <i class="fa-solid fa-plus"></i>
                    Agregar Contrato
                </a>
            </div>
        </div>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header  border-0">
                <h4 class="card-title">Lista de Contratos</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-vcenter text-wrap table-bordered border-bottom dt" id="project-list">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">ID</th>
                                <th class="border-bottom-0">Asunto</th>
                                <th class="border-bottom-0">Descripcion</th>
                                <th class="border-bottom-0">Iniciado por</th>
                                <th class="border-bottom-0">Fecha de inicio</th>
                                <th class="border-bottom-0">Fecha de finalizacion</th>
                                <th class="border-bottom-0">Estado</th>
                                <th class="border-bottom-0">Tipo de contrato</th>
                                <th class="border-bottom-0" Style="text-align: center;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contratos as $contrato)
                            <tr>
                                <td>{{$contrato->id}}</td>
                                <td>{{$contrato->subject}}</td>
                                <td>{{$contrato->description}}</td>
                                <td>{{$contrato->initiated_by}}</td>
                                <td>{{$contrato->start_date}}</td>
                                <td>{{$contrato->end_date}}</td>
                                <td>
                                    <span class="badge rounded-pill bg-info text-dark">{{$contrato->status->name}}</span>
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-success">{{$contrato->type_contract->name}}</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('contratos.show',$contrato->id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="fa-solid fa-eye text-primary"></i></a>
                                        <a href="{{route('contratos.edit',$contrato->id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa-solid fa-pen text-success"></i></a>
                                        <form action="{{route('contratos.destroy', $contrato->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="action-btns1" data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit"><i class="fa-regular fa-trash-can text-danger"></i></button>
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
          title: '¿Eliminar Contrato?',
          text: "Si eliminas este contrato se eliminará permanentemente del sistema.",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Si, eliminar Contrato!.',
          cancelButtonText: 'No, mantener Contrato!.',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
              'Eliminado!',
              'El Contrato se ha eliminado correctamente.',
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
