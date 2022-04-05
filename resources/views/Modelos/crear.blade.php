@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Agregar modelo</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="#">Modelos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Agregar modelo</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<div class="row">
			<div class="col-xl-12 col-md-12 col-lg-12">
				<div class="card">
					<form>
					<div class="card-body">
						<h4 class="mb-5 font-weight-semibold">Información del modelo</h4>
						<br>
                        <div class="row">
                            <div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Nombre</label>
									<input class="form-control" type="text" placeholder="Ingresa el nombre del modelo" name="nombreModelo" maxlength="40">
								</div>
							</div>
                            <div class="col-md-4">
								<div class="form-group">
									<label class="form-label" for="start">Fecha</label>
									<input class="form-control" type="date" id="start" value="2022-04-02" min="2016-01-01" max="2030-12-31">
								</div>
							</div>
                        </div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Descripción</label>
                                    <textarea class="form-control" type="text" rows="6" placeholder="Ingresa la descripción del modelo" name="descripcionModelo"></textarea>
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
