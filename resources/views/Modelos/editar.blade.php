@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Editar modelo</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ url()->previous() }}">Modelos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Editar modelo</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->



<div class="row">
	<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Nombre</label>
							<input required class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Ingresa el nombre del modelo" name="model_name" maxlength="30">
							@error('nombreModelo')
								<span class="invalid-feedback" role="alert">
									<strong> {{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Descripción del modelo</label>
							<input required class="form-control @error('descripcionModelo') is-invalid @enderror" type="text" placeholder="Ingresa la descripción" name="description_model" maxlength="70">
							@error('descripcionModelo')
								<span class="invalid-feedback" role="alert">
									<strong> {{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="col-md-4">
                        <div class="form-group">
								<label class="form-label" for="start">Fecha</label>
								<input required class="form-control @error('start_date') is-invalid @enderror" type="date" id="start" value="2022-04-02" min="2016-01-01" max="2030-12-31">
								@error('start_date')
									<span class="invalid-feedback" role="alert">
										<strong> {{ $message }}</strong>
									</span>
								@enderror
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
		<!-- End Row-->
@endsection
