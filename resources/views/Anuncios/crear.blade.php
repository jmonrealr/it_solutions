@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">ANUNCIOS</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ route('anuncios.index') }}">Anuncios</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Agregar anuncio</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->



<div class="row">
	<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">
			<form action="{{route('anuncios.store')}}" method="POST">
			@csrf
			<div class="card-body">

				<h4 class="mb-5 font-weight-semibold">Crea un anuncio</h4>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="name" class="form-label">Nombre</label>
							<input id="name" class="form-control @error('name') is-invalid @enderror" type="text" maxlength="22"
                                   name="name" autofocus required value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="location" class="form-label">Localización</label>
							<input id="location" class="form-control @error('location') is-invalid @enderror" type="text" maxlength="100"
                                   name="location" required value="{{ old('location') }}">
                            @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="views_counter" class="form-label">Numero de vistas</label>
							<input id="views_counter" class="form-control @error('views_counter') is-invalid @enderror" type="number" maxlength="30"
                                   name="views_counter" required min="1" value="{{ old('views_counter') }}">
                            @error('views_counter')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="description" class="form-label">Descripción</label>
							<textarea id="description" class="form-control @error('description') is-invalid @enderror" type="text" rows="6"
                                      placeholder="Ingresa el contenido de tu anuncio" name="description" required
                                      value="{{ old('description') }}"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
				</div>

                <div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="total_cost" class="form-label">Costo total</label>
							<input id="total_cost" class="form-control @error('total_cost') is-invalid @enderror" type="number" step="0.01"
                                   placeholder="50.00" name="total_cost" required min="0" value="{{ old('total_cost') }}">
                            @error('total_cost')
                                <span class="invalid-feedback" role="alert">
                                    <strong> {{ $message }}</strong>
                                </span>
                            @enderror
						</div>
					</div>
				</div>

				<input type="hidden" name="user_id" value="1">
			</div>

			<div class="card-footer text-right">
				<a role="button" class="btn btn-outline-dark" href="{{ url()->previous() }}">
					<i class="feather feather-corner-down-left sidemenu_icon"></i>
					Regresar
				</a>
				<button type="submit" class="btn btn-primary" id="enviar">
					<i class="feather  feather-save sidemenu_icon"></i>
					Guardar</button>
			</div>
		</form>
		</div>
	</div>
</div>
		<!-- End Row-->
@endsection
