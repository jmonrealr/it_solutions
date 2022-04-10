@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Ver proyecto #{{$project->id}}</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ url()->previous() }}">Proyectos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Ver proyecto</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<div class="row">

    {{-- Tarjeta información --}}
    <div class="col-xl-3 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header d-xl-flex d-block">
                <div class="card-leftheader">
                    <h4 class="card-title" id="impuestos">Detalles del proyecto</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <font style="vertical-align: inherit; font-weight:bold">Nombre del proyecto:</font>
                    <span class="mb-2 fs-14">{{$project->name}}</span>
                </div>
                <div class="row">
                    <font style="vertical-align: inherit; font-weight:bold">Cliente:</font>
                    <span class="mb-2 fs-14">{{$project->customers->first_name}}</span>
                </div>
                <div class="row">
                    <font style="vertical-align: inherit; font-weight:bold">Fecha de inicio:</font> <br>
                    <span class="mb-2 fs-14">{{$project->start_date}}</span>
                </div>
                <div class="row">
                    <font style="vertical-align: inherit; font-weight:bold">Fecha de finalización:</font> <br>
                    <span class="mb-2 fs-14">{{$project->end_date}}</span>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <a href="{{asset('/contracts' . '/CONTRACT-' . strval($project->id).strval($project->customers->id) . '.pdf')}}" class="btn btn-primary" target="_blank">Contrato</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tarjeta platillos --}}
    <div class="col-xl-9 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header d-xl-flex d-block">
                <div class="card-leftheader">
                    <h4 class="card-title">Actividades del proyecto</h4>
                </div>
            </div>

            <div class="card-body">
                {{-- Tabla platillos --}}
                <div class="row">
                    <div class="table-responsive">
                        <table class="table  text-wrap border-bottom table-borderless" id="mytable">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0 text-center" width='65%'>Actividad</th>
									<th class="border-bottom-0 text-center" width='15%'>Asignada a</th>
									<th class="border-bottom-0 text-center" width='35%'>Fecha fin</th>
									<th class="border-bottom-0 text-center" width='12%'>Horas</th>
									<th class="border-bottom-0 text-center">Monto</th>
                                </tr>
                            </thead>
                            <tbody id="lista_actividades">
                                @foreach ($project->tasks as $task)
                                <tr>
                                    <td>
                                        <span>{{$task->name}}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="mr-3 mt-0 mt-sm-1 d-block">
                                                <h6 class="mb-1 fs-14">{{$task->users->name}}</h6>
                                                <p class="text-muted mb-0 fs-12">{{$task->users->email}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td align="right">
                                        <span>{{$task->end_date}}</span>
                                    </td>
                                    <td align="right">
                                        <span>{{$task->time_hour}}</span>
                                    </td>
                                    <td align="center">
                                        <span id="monto">{{$task->amount}}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <table class="table text-nowrap" id="hr-table">
                            <tbody>
                                <tr class="border-bottom">
                                    <td></td>
                                    <td align="right" width="15%"><h6 class="mb-1 fs-17 text-muted">Total:</h6></td>
                                     <td align="right" width="15%"><h6 class="mb-1 fs-17 text-primary">{{$project->total_cost}}</h6></td>
                                    {{-- <td width="15%"><input class="form-control mb-md-1 mb-5 fs-17" id="total" name="total" value={{$project->total_cost}} readonly></td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row-->
@endsection
