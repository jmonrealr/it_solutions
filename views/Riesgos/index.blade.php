@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Control de riesgos</h4>
    </div>
{{-- DESCOMENTAR DIV PARA MOSTRAR BOTON DE AGREGAR --}}
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="#" class="btn btn-primary mr-3">
                    +Agregar riesgo</a>
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
                <h4 class="card-title">Lista de riesgos</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-vcenter text-wrap table-bordered border-bottom" id="tabla">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">ID</th>
                                <th class="border-bottom-0">Riesgo</th>
                                <th class="border-bottom-0">Descripción</th>
                                <th class="border-bottom-0">Solución</th>
                                <th class="border-bottom-0" Style="text-align: center;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td width='150px'>
                                    <span>Riesgo 1</span>
                                </td>
                                <td>
                                    <span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae ratione quam reprehenderit, rerum numquam molestiae ipsam ipsum repudiandae non voluptas repellat totam eaque eum dolorum fugit nobis autem iure ex?</span>
                                </td>
                                <td>
                                    <span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae ratione quam reprehenderit, rerum numquam molestiae ipsam ipsum repudiandae non voluptas repellat totam eaque eum dolorum fugit nobis autem iure ex?</span>
                                </td>
                                <td>
                                <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="fa-thin fa-eye"></i></a>
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Editar"><i class="feather feather-edit-2  text-success"></i></a>
                                        <button class="action-btns1" onclick="mensaje()" data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit"><i class="feather feather-trash-2 text-danger"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td width='150px'>
                                    <span>Riesgo 2</span>
                                </td>
                                <td>
                                    <span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae ratione quam reprehenderit, rerum numquam molestiae ipsam ipsum repudiandae non voluptas repellat totam eaque eum dolorum fugit nobis autem iure ex?</span>
                                </td>
                                <td>
                                    <span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae ratione quam reprehenderit, rerum numquam molestiae ipsam ipsum repudiandae non voluptas repellat totam eaque eum dolorum fugit nobis autem iure ex?</span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="feather feather-eye text-primary"></i></a>
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