@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Eventos</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="{{route('eventos.create')}}" class="btn btn-primary mr-3">
                    <i class="fa-solid fa-plus"></i>
                    Agregar evento
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
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-vcenter text-wrap table-bordered border-bottom dt" id="project-list">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">ID</th>
                                <th class="border-bottom-0">Nombre</th>
                                <th class="border-bottom-0">Descripción</th>
                                <th class="border-bottom-0">Dirección</th>
                                <th class="border-bottom-0">Fecha</th>
                                <th class="border-bottom-0" Style="text-align: center;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($eventos as $evento)
                            <tr>
                                <td>{{$evento->id}}</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">{{$evento->name}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">{{$evento->description}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span>
                                        {{$evento->location}}
                                    </span>
                                </td>
                                <td>
                                    <span>{{$evento->start_date}}</span>
                                </td>
                                <td>
                                <div class="d-flex">
                                        <a href="{{route('eventos.edit',$evento->id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pen text-success"></i></a>
                                        <form action="{{route('eventos.destroy', $evento->id)}}" method="post">
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
