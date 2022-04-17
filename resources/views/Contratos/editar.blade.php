@extends('templates.main')

@section('extra-css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Editar contrato</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ route('contratos.index') }}">Contratos</a></li>
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
			<form action="{{route('contratos.update', $contrato->id)}}" method="POST">
				@method('PATCH')
                @csrf
			<div class="card-body">
				<h4 class="mb-5 font-weight-semibold">Información del contrato</h4>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="subject" class="form-label">Asunto</label>
							<input class="form-control @error('subject') is-invalid @enderror" type="text"
                                   placeholder="Ingresa el asunto" name="subject" maxlength="100"
                                   value="{{$contrato->subject}}" id="subject" autofocus>
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
					<div class="col-md-4">
                        <div class="form-group">
							<label for="description" class="form-label">Descripcion</label>
							<textarea id="description" class="form-control @error('description') is-invalid @enderror"
                                      type="text" rows="6" placeholder="Ingrese una breve descripcion del contrato"
                                      name="description">{{$contrato->description}}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="initiated_by" class="form-label">Iniciado por</label>
							<input class="form-control @error('initiated_by') is-invalid @enderror" type="text"
                                   placeholder="Ingresa quien inicio el contrato" id="initiated_by"
                                   name="initiated_by" maxlength="100" value="{{$contrato->initiated_by}}" >
                            @error('initiated_by')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
						<div class="form-group">
							<label for="start_date" class="form-label">Fecha de inicio</label>
							<input class="form-control @error('start_date') is-invalid @enderror" type="date" id="start_date"
                                   name="start_date" min="2022-01-01" max="2040-12-31" value="{{$contrato->start_date}}">
                            @error('start_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="end_date" class="form-label">Fecha de finalizacion</label>
							<input class="form-control @error('end_date') is-invalid @enderror" data-date-format="mm/dd/yyyy"
                                   type="date" id="end_date" name="end_date" min="2022-01-01" max="2040-12-31"
                                   value="{{$contrato->end_date}}" >
                            @error('end_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="status_id" class="form-label">Estado</label>
							<select class="form-control custom-select status @error('status_id') is-invalid @enderror"
                                    name="status_id" id="status_id">
                                @isset($statuses)
                                    @foreach($statuses as $status)
                                        <option value="{{$status->id}}"
                                            {{ ($status->id == $contrato->status_id) ? 'selected' : '' }}>
                                            {{ $status->name }}
                                        </option>
                                    @endforeach
                                @endisset
                            </select>
                            @error('status_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>

                    <div class="col-md-4">
                        <div class="form-group">
							<label for="type_contract_id" class="form-label">Tipo de contrato</label>
							<select name="type_contract_id" class="form-control custom-select type_contract @error('type_contract_id') is-invalid @enderror"
                                    id="type_contract_id">
                                @isset($type_contracts)
                                    @foreach($type_contracts as $type_contract)
                                        <option value="{{$type_contract->id}}"
                                            {{ ($type_contract->id == $contrato->type_contract_id) ? 'selected' : '' }}>
                                            {{ $type_contract->name }}
                                        </option>
                                    @endforeach
                                @endisset
							</select>
                            @error('type_contract_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
                     </div>
				</div>

			</div>
			<div class="card-footer text-right">
				<a role="button" class="btn btn-outline-dark" href="{{ route('contratos.index') }}">
					<i class="feather feather-corner-down-left sidemenu_icon"></i>
					Regresar
				</a>
				<button type="submit" class="btn btn-primary">
					<i class="feather feather-save sidemenu_icon"></i>
					Guardar
                </button>
			</div>
		</form>
		</div>
	</div>
</div>
<!-- FIN CONTENIDO -->
@endsection
@section('extra-script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.type_contract').select2();
            $('.status').select2();
        });
    </script>
@endsection
