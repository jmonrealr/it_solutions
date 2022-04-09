@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Contactos</h4>
    </div>
    {{-- DESCOMENTAR DIV PARA MOSTRAR BOTON DE AGREGAR --}}
    {{-- <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="#" class="btn btn-primary mr-3">
                    Agregar cosa</a>
            </div>
        </div> --}}
</div>
<!-- FIN CABECERA -->


{{--<div class="col-5 bg-secondary">
            
        </div>

--}}
<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="container">
            @isset($contactos)
            <div class="row">
                @foreach ($contactos as $contacto)
                {{-- <div class="row"> --}}

                    {{-- <div class="col-5 bg-white mb-5 p-5 rounded shadow ml-5"> --}}
                    <div class="col-5 mb-5 p-5 bg-white rounded shadow ml-7">
                        <div class="d-flex">
                            <div class="mr-3 mt-0 mt-sm-1 d-block">
                                <span class="avatar avatar-xl brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                {{-- <h6 class="mb-1 fs-14">{{$contacto->profile->first_name}}</h6> --}}
                            </div>
                            <div>
                                <div class="row fs-4 primary-font">Ing. {{$contacto->profile->first_name}}</div>
                                <div class="row text-muted">Encargada del area RRHH</div>
                                <div class="row">{{$contacto->email}}</div>
                                <div class="row">{{$contacto->profile->phone_number}}</div>  
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-5">
                        <div class="d-flex">
                            <div class="mr-3 mt-0 mt-sm-1 d-block">
                                <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                <h6 class="mb-1 fs-14">Karla Soto</h6>
                            </div>
                            <div>
                                <div class="row fs-4 primary-font">Ing.Karla Soto</div>
                                <div class="row text-muted">Encargada del area RRHH</div>
                                <div class="row">correo@gmail.com</div>
                                <div class="row">8341234567</div>  
                            </div>
                        </div>
                    </div>
                </div> --}}
                    {{-- <p>{{$contacto->profile->first_name}}</p> --}}
                @endforeach
            @endisset            
        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection