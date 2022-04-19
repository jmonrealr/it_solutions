@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Contactos</h4>
    </div>

</div>
<!-- FIN CABECERA -->


<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="container">
            @isset($contactos)
            <div class="row">
                @foreach ($contactos as $contacto)
                    <div class="col-5 mb-5 p-5 bg-white rounded shadow ml-7">
                        <div class="d-flex">
                            <div class="mr-3 mt-0 mt-sm-1 d-block">
                                <span class="avatar avatar-xl brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                            </div>
                            <div>
                                <div class="row fs-4 primary-font">Ing. {{$contacto->profile->first_name}}</div>
                                <div class="row text-muted">Encargada del area RRHH</div>
                                <div class="row">{{$contacto->email}}</div>
                                <div class="row">{{$contacto->profile->phone_number}}</div>  
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset            
        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection