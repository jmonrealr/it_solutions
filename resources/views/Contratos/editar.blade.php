@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Editar contrato</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ url()->previous() }}">Contratos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Editar contrato</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->
<div class="row">
<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">
			<form action="{{route('contratos.update',$contrato->id)}}" method = "POST">
				@method('PUT')
                @csrf
			<div class="card-body">
				<h4 class="mb-5 font-weight-semibold">Información del contrato</h4>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Asunto</label>
							<input class="form-control" type="text" placeholder="Ingresa el asunto" name="subject" maxlength="22" value="{{$contrato->subject}}" >
						</div>
					</div>
					<div class="col-md-4">
                        <div class="form-group">
							<label class="form-label">Descripcion</label>
							<textarea class="form-control" type="text" rows="6" placeholder="Ingrese una breve descripcion del contrato" name="description">{{$contrato->description}}</textarea>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Iniciado por</label>
							<input class="form-control" type="text" placeholder="Ingresa quien inicio el contrato" name="initiated_by" maxlength="30"value="{{$contrato->initiated_by}}" >
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
						<div class="form-group">
							<label class="form-label">Fecha de inicio</label>
							<input class="date" type="date" id="start" name="start_date"
                                value="2018-07-22"
                                min="2022-01-01" max="2040-12-31" value="{{$contrato->start_date}}">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label class="form-label">Fecha de finalizacion</label>
							<input class="date" data-date-format="mm/dd/yyyy" type="date" id="start" name="end_date"
                                value="2018-07-22"
                                min="2022-01-01" max="2040-12-31" value="{{$contrato->end_date}}" >
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Estado</label>
							<input class="form-control" type="number" placeholder="Ingresa su cargo" name="status_id" maxlength="16" value="{{$contrato->status_id}}">
						</div>
					</div>

                    <div class="col-md-4">
                        <div class="form-group">
							<label class="form-label">Tipo de contrato</label>
							<select name="type_contract_id"   class="form-control custom-select select2" data-placeholder="Selecciona contrato">
								<option label="{{$contrato->type_contract_id}}"></option>
								<option value="1">Temporal</option>
								<option value="2">A Largo plazo</option>
								<option value="3">Periodo de prueba</option>
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