@extends('templates.main')

@section('custom-css')
<style>
    body{
        background-image: url(" {{asset('images/background_login3.png')}} ");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
    }

    #titulo_it{
        font-family: 'Oleo Script', cursive;
    }

    #logo_izq{
        width: 35%
    }
</style>
@endsection

@section('content')
        <div class="container">
            <div class="row ">
                <div class="col-6  pt-5 rounded" Style="background: #EFEFBB;
                    background: -webkit-linear-gradient(to right, #D4D3DD, #EFEFBB);
                    background: linear-gradient(to right, #D4D3DD, #EFEFBB);">
                    <img src="{{asset('images/logo.svg')}}" alt="logo" class="mx-auto d-block" id="logo_izq">
                    <h2 class="text-center text-white display-2" id="titulo_it">IT <br> Solutions</h2>
                </div>


                <div class="col-6 bg-white pb-8 pt-5 pr-5 pl-5 rounded" >
                    <h2 class="fw-bold  py-5" Style="text-align: center;">Inicio de sesión</h2>

                    <div class="">
                        <form method="POST" action="{{ route('login') }}" Style="margin-bottom: 209px; ">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-7">
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
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-7">
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
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

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
        </div>
@endsection




@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{-- COLUMNA IZQUIERDA --}}
            <div class="col-4 pb-8 pt-5 rounded" style="background: #0F2027;
                background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
                background: linear-gradient(to right, #2C5364, #203A43, #0F2027); ">
                <img src="{{asset('images/logo.svg')}}" alt="logo" class="mx-auto d-block" id="logo_izq">
                <h2 class="text-center text-white display-2" id="titulo_banquetes">IT <br> Solutions</h2>
            </div>

            {{-- COLUMNA DERECHA --}}
            <div class="col-5 bg-white pb-8 pt-5 pr-5 pl-5 rounded" Style="background: #EFEFBB;
                background: -webkit-linear-gradient(to right, #D4D3DD, #EFEFBB);
                background: linear-gradient(to right, #D4D3DD, #EFEFBB); ">
                <h2 class="fw-bold text-left py-5" Style="text-align: center;">Inicio de sesión</h2>


                {{-- login --}}
                <form class="pl-5 pr-5" method="POST" action="{{ route('login') }}" Style="margin: 31px;">
                    @csrf
                    {{-- correo --}}
                    <div class="mb-4">
                        <label class="form-label mb-0 mt-2"> {{ __('E-Mail Address') }}</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Ingresa un correo electronico" autofocus autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- contraseña --}}
                    <div class="mb-4">
                        <label class="form-label mb-0 mt-2">{{ __('Password') }}</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Introduce una contraseña" autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember"> {{ __('Remember Me') }} </label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </div>

                    <div class="my-3">
                        <div class="text-center">
                            @if(Route::has('password.request'))
                                <span><a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }} </a> </span> <br>
                            @endif

                            <span>¿No tienes cuenta? <a class="btn btn-link" href="{{ route('register') }}">Regístrate</a></span>
                        </div>
                    </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


