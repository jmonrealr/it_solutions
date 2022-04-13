@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Editar anuncio</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ url()->previous() }}">Anuncios</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Editar anuncios</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->

<div class="row">
	<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">
			<form action="{{route('anuncios.update', $id)}}" enctype="multipart/form-data">
				@method('PUT')
				@csrf
			<div class="card-body">

				<h4 class="mb-5 font-weight-semibold">Crea un anuncio</h4>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label class="form-label">Nombre</label>
							<input class="form-control" type="text" maxlength="22" 
							name="name" value="{{$anuncio->name}}">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="form-label">Localización</label>
							<input class="form-control" type="text"  maxlength="100"
							 name="location" value="{{$anuncio->location}}">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label class="form-label">Numero de vistas</label>
							<input class="form-control" type="number"  maxlength="30" 
							name="views_counter" value="{{$anuncio->views_counter}}">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="form-label">Descripción</label>
							<textarea class="form-control" type="text" 
							rows="6" placeholder="Ingresa el contenido de tu anuncio" 
							name="description" value="{{$anuncio->description}}"></textarea>
						</div>
					</div>
				</div>

                <div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Costo total</label>
							<input class="form-control" type="number" step="0.01" 
							placeholder="50.00" name="total_cost" value="{{$anuncio->total_cost}}">
						</div>
					</div>
				</div>

				<input type="hidden" name="user_id" value="{{$anuncio->user->id}}">
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
