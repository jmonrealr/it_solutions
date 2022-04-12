@extends('templates.main')

@section('content')

<!--Page header-->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Departamento de {{$departamento->name}}</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ url()->previous() }}">Departamentos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Ver departamento</li>
        </ul>
    </div>
    {{-- <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="empleados/create" class="btn btn-primary mr-3">
                    <i class="feather  feather-plus sidemenu_icon"></i>Agregar Empleado</a>
            </div>
        </div>
    </div> --}}
</div>
<!--End Page header-->



<!-- CONTENIDO -->

<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header  border-0">
                <h4 class="card-title">Lista de empleados</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-vcenter text-wrap table-bordered border-bottom dt" id="project-list">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">ID</th>
                                <th class="border-bottom-0">Nombre del empleado</th>
                                {{-- <th class="border-bottom-0">Cargo</th> --}}
                                <th class="border-bottom-0" Style="text-align: center;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departamento->users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                        <div class="mr-3 mt-0 mt-sm-1 d-block">
                                            <h6 class="mb-1 fs-14">{{$user->profile->first_name}}</h6>
                                            <p class="text-muted mb-0 fs-12">{{$user->email}}</p>
                                        </div>
                                    </div>
                                </td>
                                {{-- <td>
                                    <span>CEO</span>
                                </td> --}}
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('empleados.show',$user->id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Ver"><i class="fa-solid fa-eye text-primary"></i></a>
                                        <a href="{{route('empleados.edit',$user->id)}}" class="action-btns1" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa-solid fa-pen text-success"></i></a>
                                        <form action="{{route('empleados.destroy', $user->id)}}" method="post">
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
