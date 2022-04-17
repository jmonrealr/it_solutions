@extends('templates.auth')

@section('custom-css')
<style>
    #titulo_it{
        font-family: 'Oleo Script', cursive;
    }
    .container{
    position: absolute;

    }

    #logo_izq{
        width: 20%
    }
</style>
@endsection


@section('content')
    <div class="container" style="position: relative; margin-top: 30px">
            <div class="row">
                <div class="col-8  pt-5" style="background: #EFEFBB;
                    background: -webkit-linear-gradient(to right, #D4D3DD, #EFEFBB);
                    background: linear-gradient(to right, #D4D3DD, #EFEFBB);">
                    <img src="{{asset('images/login.svg')}}" alt="logo" class="mx-auto d-block" id="logo_izq" style="width: 65%;">
                </div>


                <div class="col-4 bg-white pb-8 pt-5 pr-5 pl-5">
                    <h2 class="fw-bold  py-5" style="text-align: center; ">Inicio de sesión</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="form-label mb-0 mt-2">{{ __('E-Mail Address') }}</label>

                                <div class="mb-4">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" placeholder="Ingresa un correo electronico" autofocus >

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="form-label mb-0 mt-2">{{ __('Password') }}</label>

                                <div class="mb-4">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password" placeholder="Ingresa una contraseña">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                    </form>
                </div>
            </div>
    </div>

@endsection


