@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Ver proyecto #01</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="/proyectos">Proyectos</a></li>
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
                    <span class="mb-2 fs-14">Lorem, ipsum.</span>
                </div>
                <div class="row">
                    <font style="vertical-align: inherit; font-weight:bold">Cliente:</font>
                    <span class="mb-2 fs-14">UPVictoria</span>
                </div>
                <div class="row">
                    <font style="vertical-align: inherit; font-weight:bold">Fecha de inicio:</font> <br>
                    <span class="mb-2 fs-14">01/01/2022</span>
                </div>
                <div class="row">
                    <font style="vertical-align: inherit; font-weight:bold">Fecha de finalización:</font> <br>
                    <span class="mb-2 fs-14">01/12/2022</span>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="btn btn-primary" target="_blank">Contrato</a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn btn-success" target="_blank">Factura</a>
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
									<th class="border-bottom-0 text-center" width='25%'>Asignada a</th>
									<th class="border-bottom-0 text-center" width='100px'>Fecha fin</th>
									<th class="border-bottom-0 text-center" width='12%'>Horas</th>
									<th class="border-bottom-0 text-center">Monto</th>
                                </tr>
                            </thead>
                            <tbody id="lista_actividades">
                                <tr>
                                    <td>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ea!</span>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                            <div class="mr-3 mt-0 mt-sm-1 d-block">
                                                <h6 class="mb-1 fs-14">Lorem ipsum dolor sit.</h6>
                                                <p class="text-muted mb-0 fs-12">example@email.com</p>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td align="right">
                                        <span>01/02/2022</span>
                                    </td>
                                    <td align="right">
                                        <span>10</span>
                                    </td>
                                    <td align="center">
                                        <span id="monto">$0.00</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table text-nowrap" id="hr-table">
                            <tbody>
                                <tr class="border-bottom">
                                    <td></td>
                                    <td align="right" width="15%"><h6 class="mb-1 fs-17 text-muted">Total:</h6></td>
                                    <td width="15%"><input class="form-control mb-md-1 mb-5 fs-17" id="total" name="total" value="$0.00" readonly></td>
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
