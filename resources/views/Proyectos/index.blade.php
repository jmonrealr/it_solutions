@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Proyectos</h4>
    </div>
    {{-- DESCOMENTAR DIV PARA MOSTRAR BOTON DE AGREGAR --}}
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="proyectos/create" class="btn btn-primary mr-3">
                    Agregar proyecto</a>
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
                                <th class="border-bottom-0">Proyecto</th>
                                <th class="border-bottom-0">Cliente</th>
                                <th class="border-bottom-0">Fechas</th>
                                <th class="border-bottom-0" Style="text-align: center;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($projects)
                                @foreach ($projects as $project)
                                <tr>
                                    <td>{{$project->id}}</td>
                                    <td><h6 class="mb-1 fs-14">{{$project->name}}</h6></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="mr-3 mt-0 mt-sm-1 d-block">
                                                <h6 class="mb-1 fs-14">{{$project->customers->first_name}}</h6>
                                                <p class="text-muted mb-0 fs-12">{{$project->customers->email}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="mr-3 mt-0 mt-sm-1 d-block">
                                                <h6 class="mb-1 fs-14"><span class="text-muted mb-0 fs-14">Inicio: </span>{{$project->start_date}}</h6>
                                                <h6 class="mb-1 fs-14"><span class="text-muted mb-0 fs-14">Fin: </span>{{$project->end_date}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td width='100px'>
                                        <div class="d-flex">
                                            <a href="{{route('proyectos.show', $project->id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="fa-solid fa-eye text-primary"></i></a>
                                            <a href="{{route('proyectos.edit', $project->id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa-solid fa-pen text-success"></i></a>
                                            <form action="{{route('proyectos.destroy', $project->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="action-btns1" data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit"><i class="fa-regular fa-trash-can text-danger"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection