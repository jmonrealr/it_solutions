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
            <form method="POST" action="{{ route('user-password.update') }}">
                @csrf
                @method('PUT')

                @if(session('status') == "password-updated")
                    <div class="alert alert-success" role="alert">
                        Contraseña actualizada satisfactoriamente.
                    </div>
                @endif
                <div class="card-body">
                    <h4 class="mb-5 font-weight-semibold">{{ __('Change Password') }}</h4>

                    {{-- Fila Nombre usuario y Correo --}}
                    <div class="row">
                        {{-- Nombre usuario --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="current_password" class="form-label mb-0 mt-2"> {{ __('Current Password') }}</label>
                                <input id="current_password" type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                                       name="current_password" placeholder="Ingresa tu contraseña actual" autofocus>
                                @error('current_password', 'updatePassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password" class="form-label mb-0 mt-2">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                                       name="password" required autocomplete="new-password"
                                       placeholder="Ingresa tu nueva contraseña">

                                @error('password', 'updatePassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="password-confirm" class="form-label mb-0 mt-2">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                       required autocomplete="new-password" placeholder="Confirma tu nueva contraseña">
                            </div>
                        </div>
                    </div>

                    {{-- Button Guardar--}}
                    <div class="card-footer text-right">
                        <a role="button" class="btn btn-outline-dark" href="{{ route('profile.index') }}">
                            <i class="feather feather-corner-down-left sidemenu_icon"></i>
                            Regresar
                        </a>
						<button type="submit" class="btn btn-primary">
							<i class="feather  feather-save sidemenu_icon"></i>
							{{ __('Change Password') }}
                        </button>
				    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
