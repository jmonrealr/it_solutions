@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Agregar empleado</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="#">Empleados</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Agregar empleado</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<div class="row">
			<div class="col-xl-12 col-md-12 col-lg-12">
				<div class="card">
					<form>
					<div class="card-body">
						<h4 class="mb-5 font-weight-semibold">Información básica</h4>

                        <div class="row">
							<div class="col-5">
								<div class="box-widget widget-user">
									<div class="widget-user-image d-sm-flex">
										<span class="avatar" style="background-image: url({{asset('images/usuario.png')}})">
										</span>
										<div class="ml-sm-3 mt-4">
											<div class="form-group">
												<label class="form-label">Foto de perfil</label>
												<div class="input-group file-browser">
													<input type="text" class="form-control border-right-0 browse-file" placeholder="Cargar otra imagen" readonly="">
													<label class="input-group-append mb-0">
														<span class="btn ripple btn-primary">
															Examinar <input type="file" class="file-browserinput" style="display: none;" multiple="" name="foto">
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> <br>


                        <div class="row">
                            <div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Nombre</label>
									<input class="form-control" type="text" placeholder="Ingresa el nombre del cliente" name="nombre" maxlength="22">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Apellido Paterno</label>
									<input class="form-control" type="text" placeholder="Ingresa su apellido paterno" name="apellidos" maxlength="30">
								</div>
							</div>
                            <div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Apellido Materno</label>
									<input class="form-control" type="text" placeholder="Ingresa su apellido materno" name="apellidos" maxlength="30">
								</div>
							</div>
                        </div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label class="form-label">Edad</label>
									<input class="form-control" type="text" placeholder="Ingresa su edad" name="edad" maxlength="16">
								</div>
							</div>
                            <div class="col-md-5">
								<div class="form-group">
									<label class="form-label">Departamento</label>
									<input class="form-control" type="text" placeholder="Ingresa su departamento" name="departamento" maxlength="16">
								</div>
							</div>
                            <div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Cargo</label>
									<input class="form-control" type="text" placeholder="Ingresa su cargo" name="cargo" maxlength="16">
								</div>
							</div>

						</div>

                        <h4 class="mb-5 mt-7 font-weight-bold">Actividades y Contrato</h4>


						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Actividades a desempeñar</label>
                                    <textarea class="form-control" type="text" rows="6" placeholder="Ingresa las actividades a desempeñar" name="actividad"></textarea>
								</div>
							</div>

							<div class="col-md-4">
                                <div class="form-group">
									<label class="form-label">Tipo de contrato</label>
									<select name="genero" class="form-control custom-select select2" data-placeholder="Selecciona contrato">
										<option label="Selecciona contrato"></option>
										<option value="1">Temporal</option>
										<option value="2">Capacitación inicial</option>
                                        <option value="2">Periodo de prueba</option>
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
		<!-- End Row-->
@endsection
