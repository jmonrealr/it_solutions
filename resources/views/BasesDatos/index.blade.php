@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Bases de Datos</h4>
        <h4 class="page-subtitle">Base de Datos / Soluciones TI</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list"> 
                <!-- LINK DE LA BASE DE DATOS EN phpmyadmin -->
                <a href="http://google.com" target=_blanck class="btn btn-primary mr-3">
                    Ir a Base de Datos</a>
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
                                <th class="border-bottom-0">Nombre de la tabla</th>
                                <th class="border-bottom-0">Descripción</th>
                                <th class="border-bottom-0">Acceso Directo</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">Empleados</h6>
                                        </div>
                                    </div>
                                </td>
                                <td width="350px">
                                    <span>Se muestran los datos de los empleados de la empresa</span>
                                </td>
                                <td>
                                    <!--Aqui lleva el link directo a cada tabla en la BD-->
                                    <a href="http://google.com" target=_blanck class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="fa-solid fa-eye text-primary"></i></a>
                                </a>
                                    </span>
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
