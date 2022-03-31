@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Ver empleado #01</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="#">Empleados</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Ver empleado</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->


	<!-- Row -->
	<div class="row">
	    {{-- Tarjeta información --}}
	    <div class="col-8 col-md-12 col-lg-12">
	        <div class="card">

                <div class="row">
					<div class="col-5">
						<div class="box-widget widget-user">
							<div class="widget-user-image d-sm-flex" style="margin: 20px;">
								<span class="avatar" style="background-image: url({{asset('images/usuario.png')}})">
									</span>
								<div class="ml-sm-3 mt-4">
									<div class="form-group">
                                        <font style="vertical-align: inherit; font-weight:bold">Nombre del empleado</font>
										<label class="form-label">Juan De Dios Nava Gallardo</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<font style="vertical-align: inherit; font-weight:bold">ID</font>
						<span class="mb-2 fs-14">1930536</span>
					</div>
                    <div class="row">
						<font style="vertical-align: inherit; font-weight:bold">Edad</font>
						<span class="mb-2 fs-14">20</span>
					</div>
					<div class="row">
						<font style="vertical-align: inherit; font-weight:bold">Cargo</font>
						<span class="mb-2 fs-14">CEO</span>
					</div>
					<div class="row">
						<font style="vertical-align: inherit; font-weight:bold">Departamento</font>
						<span class="mb-2 fs-14">Departamento de dirección general</span>
					</div>
					<div class="row">
						<font style="vertical-align: inherit; font-weight:bold">Descripción general</font>
                        <ul>
                            <li class="mb-2 fs-14">Dirigir la empresa</li>
                            <li class="mb-2 fs-14">Suministrar firmas, aprobar proyectos y supervisarlos</li>
                        </ul>
					</div>
				</div>
                <div class="card-footer text-right">
						<a role="button" class="btn btn-outline-dark" href="{{ url()->previous() }}">
							<i class="feather feather-corner-down-left sidemenu_icon"></i>
							Regresar
						</a>
			    </div>
	        </div>
	    </div>
	</div>

@endsection
