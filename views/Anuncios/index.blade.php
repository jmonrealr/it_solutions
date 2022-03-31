@extends('templates.main')

@section('content')


<!--Page header-->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Anuncios</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="clientes/crear" class="btn btn-primary mr-3">
                    <i class="feather  feather-plus sidemenu_icon"></i>Agregar Anuncio</a>
            </div>
        </div>
    </div>
</div>
<!--End Page header-->


<!-- CONTENIDO -->

<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header  border-0">
                <h4 class="card-title">Lista de anuncios</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-vcenter text-wrap table-bordered border-bottom" id="project-list">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">ID</th>
                                <th class="border-bottom-0">Contenido</th>
                                <th class="border-bottom-0">Plataforma de emisión</th>
                                <th class="border-bottom-0">Número de vistas</th>
                                <th class="border-bottom-0" Style="text-align: center;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Lorem ipsum dolor</h6>
                                        </div>
                                    </div>
                                </td>
                                <td width="350px">
                                    <span>Facebook</span>
                                </td>
                                <td>
                                    <span>100</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="empleados/ver" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="feather feather-eye text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Editar"><i class="feather feather-edit-2  text-success"></i></a>
                                        <button class="action-btns1" onclick="mensaje()" data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit"><i class="feather feather-trash-2 text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>02</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Lorem ipsum dolor</h6>
                                        </div>
                                    </div>
                                </td>
                                <td width="350px">
                                    <span>Facebook</span>
                                </td>
                                <td>
                                    <span>100</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="empleados/ver" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="feather feather-eye text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Editar"><i class="feather feather-edit-2  text-success"></i></a>
                                        <button class="action-btns1" onclick="mensaje()" data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit"><i class="feather feather-trash-2 text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>03</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Lorem ipsum dolor</h6>
                                        </div>
                                    </div>
                                </td>
                                <td width="350px">
                                    <span>Facebook</span>
                                </td>
                                <td>
                                    <span>100</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="empleados/ver" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="feather feather-eye text-primary"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Editar"><i class="feather feather-edit-2  text-success"></i></a>
                                        <button class="action-btns1" onclick="mensaje()" data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit"><i class="feather feather-trash-2 text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
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
          title: '¿Eliminar empleado?',
          text: "Si eliminas a este empleado se eliminará permanentemente del sistema.",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Si, eliminar empleado!.',
          cancelButtonText: 'No, mantener empleado!.',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
              'Eliminado!',
              'El empleado se ha eliminado correctamente.',
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
