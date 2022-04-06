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
            <div class="row">
                <div class="col-5">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex">
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                    <h6 class="mb-1 fs-14">Karla Soto</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row fs-4 primary-font">Ing.Karla Soto</div>
                            <div class="row text-muted">Encargada del area RRHH</div>
                            <div class="row">correo@gmail.com</div>
                            <div class="row">8341234567</div>  
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex">
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                    <h6 class="mb-1 fs-14">Karla Soto</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row fs-4 primary-font">Ing.Karla Soto</div>
                            <div class="row text-muted">Encargada del area RRHH</div>
                            <div class="row">correo@gmail.com</div>
                            <div class="row">8341234567</div>  
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex">
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                    <h6 class="mb-1 fs-14">Karla Soto</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row fs-4 primary-font">Ing.Karla Soto</div>
                            <div class="row text-muted">Encargada del area RRHH</div>
                            <div class="row">correo@gmail.com</div>
                            <div class="row">8341234567</div>  
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex">
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                    <h6 class="mb-1 fs-14">Karla Soto</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row fs-4 primary-font">Ing.Karla Soto</div>
                            <div class="row text-muted">Encargada del area RRHH</div>
                            <div class="row">correo@gmail.com</div>
                            <div class="row">8341234567</div>  
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="offset-md-6">
                        <div class="d-flex" style="height: 500px;">
                            <div class="vr"></div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex">
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                    <h6 class="mb-1 fs-14">Karla Soto</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row fs-4 primary-font">Ing.Karla Soto</div>
                            <div class="row text-muted">Encargada del area RRHH</div>
                            <div class="row">correo@gmail.com</div>
                            <div class="row">8341234567</div>  
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex">
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                    <h6 class="mb-1 fs-14">Karla Soto</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row fs-4 primary-font">Ing.Karla Soto</div>
                            <div class="row text-muted">Encargada del area RRHH</div>
                            <div class="row">correo@gmail.com</div>
                            <div class="row">8341234567</div>  
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex">
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                    <h6 class="mb-1 fs-14">Karla Soto</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row fs-4 primary-font">Ing.Karla Soto</div>
                            <div class="row text-muted">Encargada del area RRHH</div>
                            <div class="row">correo@gmail.com</div>
                            <div class="row">8341234567</div>  
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex">
                                <div class="mr-3 mt-0 mt-sm-1 d-block">
                                    <span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('images/usuario.png')}}"></span>
                                    <h6 class="mb-1 fs-14">Karla Soto</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row fs-4 primary-font">Ing.Karla Soto</div>
                            <div class="row text-muted">Encargada del area RRHH</div>
                            <div class="row">correo@gmail.com</div>
                            <div class="row">8341234567</div>  
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection