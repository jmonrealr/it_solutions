@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Agregar Contrato</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="#">Contratos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Agregar contrato</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<!-- CONTENIDO -->
<div class="row">
<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">
			<form action="{{route('contratos.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="mb-5 font-weight-semibold">Información del contrato</h4>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Asunto</label>
							<input class="form-control" type="text" placeholder="Ingresa el asunto" name="subject" maxlength="22">
						</div>
					</div>
					<div class="col-md-4">
                        <div class="form-group">
							<label class="form-label">Descripcion</label>
							<textarea class="form-control" type="text" rows="6" placeholder="Ingrese una breve descripcion del contrato" name="description"></textarea>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Iniciado por</label>
							<input class="form-control" type="text" placeholder="Ingresa quien inicio el contrato" name="initiated_by" maxlength="30">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
						<div class="form-group">
							<label class="form-label">Fecha de inicio</label>
							<input class="date" type="date" id="start_date" name="start_date"
                                value="2018-07-22"
                                min="2022-01-01" max="2040-12-31">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label class="form-label">Fecha de finalizacion</label>
							<input class="date" data-date-format="mm/dd/yyyy" type="date" id="end_date" name="end_date"
                                value="2018-07-22"
                                min="2022-01-01" max="2040-12-31">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Estado</label>
							<select name="status_id" class="form-control custom-select select2" data-placeholder="Selecciona el status">
								<option label="Selecciona el estado"></option>
								<option value="1">En proceso</option>
								<option value="2">Finalizado</option>
							</select>
						</div>
					</div>

                    <div class="col-md-4">
                        <div class="form-group">
							<label class="form-label">Tipo de contrato</label>
							<select name="type_contract_id" class="form-control custom-select select2" data-placeholder="Selecciona contrato">
								<option label="Selecciona contrato"></option>
								<option value="1">rerum</option>
								<option value="2">deserunt</option>
							</select>
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