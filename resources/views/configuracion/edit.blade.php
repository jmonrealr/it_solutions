@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Configuración de la cuenta</h4>
    </div>
</div>
<!-- FIN CABECERA -->

<!-- Row -->
<div class="row">
    {{-- Tarjeta Información usuario --}}
    <div class="col-xl-12 col-md-12 col-lg-12" id="perfil">
        <div class="card">
            <form method="POST" action="{{ route('user-profile-information.update') }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <h4 class="mb-5 font-weight-semibold">Información básica</h4>

                    {{-- Fila Nombre usuario y Correo --}}
                    <div class="row">
                        {{-- Nombre usuario --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-label mb-0 mt-2"> {{ __('Username') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" placeholder="Ingresa un nombre de usuario" autofocus
                                       value="{{ old('name') ?? auth()->user()->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Correo --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label mb-0 mt-2" for="email"> {{ __('E-Mail Address') }}</label>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                       name="email" placeholder="Ingresa un correo electronico"
                                       value="{{ old('email') ?? auth()->user()->email }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Button Guardar--}}
                    <div class="card-footer text-right">
						<button type="submit" class="btn btn-primary">
							<i class="feather  feather-save sidemenu_icon"></i>
							{{ __('Update Profile') }}
                        </button>
				    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
