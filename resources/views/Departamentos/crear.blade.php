@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Agregar departamento</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ url()->previous() }}">Departamentos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Agregar departamento</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class='row'>
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card">
                    <form>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input class="form-control" type="text" placeholder="Ingresa el nombre del departamento" name="nombre" maxlength="22">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Encargado</label>
                                        <input class="form-control" type="text" placeholder="Ingresa nombre del encargado del departamento" name="apellidos" maxlength="30">
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="form-label">Descripción</label>
                                        <textarea class="form-control" type="text" rows="6" placeholder="Ingresa una descripción del funcionamiento del departamento" name="actividad"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a role="button" class="btn btn-outline-dark">
                                    <i class="feather feather-corner-down-left sidemenu_icon"></i>
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="feather  feather-save sidemenu_icon"></i>
                                    Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection