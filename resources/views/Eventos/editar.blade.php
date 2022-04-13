@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Editar evento</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ url()->previous() }}">Eventos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Editar eventos</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->
<div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card">
                <form action="{{route('eventos.update',$eventos->id)}}" method = "POST">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <h4 class="mb-5 font-weight-semibold">Información del evento</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Nombre del evento</label>
                                    <textarea class="form-control" type="text" placeholder="Ingresa el nombre evento" name="name" maxlength="22">{{$eventos->name}}</textarea>
                                </div>
                            </div>
						</div>
                        <div class="row">                         
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="start">Fecha</label>
                                    <input class="form-control" type="date" name="start_date" id="start" value="{{$eventos->start_date}}" min="2016-01-01" max="2030-12-31">
                                </div>
                            </div>
                            {{-- Descripción --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Descripción:</label>
                                    <textarea rows="3" class="form-control" name="description" placeholder="Agrega una breve descripción" maxlength="250">{{$eventos->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- solucion --}}
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label class="form-label">Solución del riesgo:</label>
                                    <textarea rows="3" class="form-control" name="location" placeholder="Agrega una breve descripción" maxlength="250">{{$eventos->location}}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <a role="button" class="btn btn-outline-dark" href="{{ url()->previous() }}">
                            <i class="feather feather-corner-down-left sidemenu_icon"></i>
                            Regresar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="feather  feather-save sidemenu_icon"></i>
                            Guardar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
<!-- FIN CONTENIDO -->
@endsection