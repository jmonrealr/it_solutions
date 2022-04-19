@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Agregar empleado</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ url()->previous() }}">Empleados</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Agregar empleado</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->


<div class="row">
	<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">
			<form action="{{route('empleados.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="card-body">

				<h4 class="mb-5 font-weight-semibold">Información básica</h4>

				<div class="row">
					<div class="col-5">
						<div class="box-widget widget-user">
							<div class="widget-user-image d-sm-flex">
								<img src="{{asset('images/usuario.png')}}" class="avatar-xxl rounded-circle mb-1" alt="Foto producto" name="image" id="image">
								{{-- <span class="avatar" style="background-image: url({{asset('images/usuario.png')}})"> --}}
{{--								</span>--}}
								<div class="ml-sm-3 mt-4">
									<div class="form-group">
										<label class="form-label">Foto de perfil</label>
										<div class="input-group file-browser">
											<input required type="text" class="form-control border-right-0 browse-file" placeholder="Cargar otra imagen" readonly="" >
											<label class="input-group-append mb-0">
												<span class="btn ripple btn-primary">
													Examinar <input required type="file" class="file-browserinput" style="display: none;" accept="image/*" name="url_image" id="url_image" onchange="previewImage(event)">
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
							<input required class="form-control @error('first_name') is-invalid @enderror" type="text" placeholder="Ingresa el nombre del cliente" name="first_name" maxlength="22" value="{{old('first_name')}}">
							@error('first_name')
								<span class="invalid-feedback" role="alert">
									<strong> {{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Apellido Paterno</label>
							<input required class="form-control @error('paternal_last_name') is-invalid @enderror" type="text" placeholder="Ingresa su apellido paterno" name="paternal_last_name" maxlength="30" value="{{old('paternal_last_name')}}">
							@error('paternal_last_name')
								<span class="invalid-feedback" role="alert">
									<strong> {{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Apellido Materno</label>
							<input required class="form-control @error('maternal_last_name') is-invalid @enderror" type="text" placeholder="Ingresa su apellido materno" name="maternal_last_name" maxlength="30" value="{{old('maternal_last_name')}}">
							@error('maternal_last_name')
								<span class="invalid-feedback" role="alert">
									<strong> {{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label class="form-label">Edad</label>
							<input required class="form-control @error('age') is-invalid @enderror" type="number" placeholder="Ingresa su edad" name="age" maxlength="2" value="{{old('age')}}">
							@error('age')
								<span class="invalid-feedback" role="alert">
									<strong> {{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="form-label">Número telefonico</label>
							<input required class="form-control @error('phone_number') is-invalid @enderror" type="number" placeholder="8344444444" name="phone_number" value="{{old('phone_number')}}" maxlength="10">
							@error('phone_number')
								<span class="invalid-feedback" role="alert">
									<strong> {{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
				</div>

				{{-- <h4 class="mb-5 font-weight-semibold mt-7">Actividades y contrato</h4> --}}
				<h4 class="mb-5 font-weight-semibold mt-7">Información empresarial</h4>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Departamento</label>
							<select name="department_id" class="form-control custom-select select2 @error('department_id') is-invalid @enderror" data-placeholder="Selecciona departamento">
								<option label="Selecciona departamento"></option>
								@foreach ($departamentos as $departamento)
									<option value="{{$departamento->id}}">{{$departamento->name}}</option>
								@endforeach
							</select>
							@error('department_id')
								<span class="invalid-feedback" role="alert">
									<strong> {{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Cargo</label>
							<input required class="form-control @error('cargo') is-invalid @enderror" type="text" placeholder="Ingresa su cargo" name="cargo" value="{{old('cargo')}}">
							@error('cargo')
								<span class="invalid-feedback" role="alert">
									<strong> {{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Tipo de contrato</label>
							<select name="contract_id" class="form-control custom-select select2 @error('contract_id') is-invalid @enderror" data-placeholder="Selecciona contrato" value="{{old('contract_id')}}">
								<option label="Selecciona contrato"></option>
								<option value="1">Temporal</option>
								<option value="2">Capacitación inicial</option>
								<option value="2">Periodo de prueba</option>
							</select>
							@error('contract_id')
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
							<label class="form-label">Actividades a desempeñar</label>
							<textarea class="form-control" type="text" rows="6" placeholder="Ingresa las actividades a desempeñar" name="actividad"></textarea>
						</div>
					</div>
				</div>


				<h4 class="mt-7 mb-5 font-weight-semibold">Cuenta de ingreso</h4>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label class="form-label">Correo electronico</label>
							<input required class="form-control @error('email') is-invalid @enderror" type="email" placeholder="example@email.com" name="email" value="{{old('email')}}">
							@error('email')
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
							<label class="form-label">Contraseña</label>
							<input required class="form-control @error('password') is-invalid @enderror" type="password" name="password" value="{{old('password')}}">
							@error('password')
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

@section('extra-script')
<script type="text/javascript">
	const previewImage = e => {
		const preview = document.getElementById('image');
		preview.src = URL.createObjectURL(e.target.files[0]);
		preview.onload = () => URL.revokeObjectURL(preview.src);
	};
</script>
@endsection
