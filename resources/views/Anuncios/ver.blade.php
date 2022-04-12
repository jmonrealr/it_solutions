@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Ver anuncio</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ url()->previous() }}">Anuncios</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Ver anuncio</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->

<div class="row">
	<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">

			<div class="card-body">

				<h4 class="mb-5 font-weight-semibold">Anuncio del empleado</h4>


				<div class="row">
					<div class="col-md-1">
						<div class="form-group">
							<label class="form-label">ID</label>
							<div class="text-muted">1930536</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label class="form-label">Numero de vistas</label>
							<div class="text-muted">23</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="form-label">Contenido</label>
							<div class="text-muted">En esta semana se suspenden labores debido al decreto del gobernador</div>
						</div>
					</div>
				</div>

                <div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Plataforma de emisión</label>
							<div class="text-muted">Facebook</div>
						</div>
					</div>
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
<!-- FIN CONTENIDO -->
@endsection
