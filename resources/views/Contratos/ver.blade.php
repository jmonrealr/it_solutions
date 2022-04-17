@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
<div class="page-leftheader">
        <h4 class="page-title">Ver contrato #{{$contrato->id}}</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ route('contratos.index') }}">Contratos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Ver contrato</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<font style="vertical-align: inherit; font-weight:bold">ID</font><br>
								<span class="mb-2 fs-14">{{$contrato->id}}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<font style="vertical-align: inherit; font-weight:bold">Asunto</font><br>
								<span class="mb-2 fs-14">{{$contrato->subject}}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<font style="vertical-align: inherit; font-weight:bold">Descripcion</font><br>
								<span class="mb-2 fs-14">{{$contrato->description}}</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<font style="vertical-align: inherit; font-weight:bold">Iniciado por</font><br>
								<span class="mb-2 fs-14">{{$contrato->initiated_by}}</span>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<font style="vertical-align: inherit; font-weight:bold">Fechas</font>
								<ul>
									<li class="mb-2 fs-14">Fecha de inicio: {{$contrato->start_date}}</li>
									<li class="mb-2 fs-14">Fecha de finalizacion: {{$contrato->end_date}}</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<font style="vertical-align: inherit; font-weight:bold">Estado</font><br>
								<span class="badge rounded-pill bg-info text-dark">{{$contrato->status->name}}</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<font style="vertical-align: inherit; font-weight:bold">Tipo de contrato</font><br>
								<span class="badge rounded-pill bg-success">{{$contrato->type_contract->name}}</span>
							</div>
						</div>
					</div>
				</div>

                <div class="card-footer text-right">
					<a role="button" class="btn btn-outline-dark" href="{{ route('contratos.index') }}">
					<i class="feather feather-corner-down-left sidemenu_icon"></i>Regresar</a>
			    </div>
	        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection
