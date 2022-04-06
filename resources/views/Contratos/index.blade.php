@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Contratos</h4>
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




<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
    <div class="card">
            <div class="card-header  border-0">
                {{--<h4 class="card-title">Lista de empleados</h4>--}}
            </div>
            <div class="card-body">
                <div class="container">
                <div class="row">
                    <div class="col">
                        <button class="btn-primary">Prueb</button>
                    </div>
                    <div class="col">
                        <button class="btn-primary">Prueb</button>
                    </div>
                    <div class="col">
                        <button class="btn-primary">Prueb</button>
                    </div>
                    <div class="col">
                        <button class="btn-primary">Prueb</button>
                    </div>
                    <div class="col">
                        <button class="btn-primary">Prueb</button>
                    </div>
                </div>
                <br>
                <div class="row">
                <div class="col">
                        <button class="btn-primary">Prueb</button>
                    </div>
                    <div class="col">
                        <button class="btn-primary">Prueb</button>
                    </div>
                    <div class="col">
                        <button class="btn-primary">Prueb</button>
                    </div>
                    <div class="col">
                        <button class="btn-primary">Prueb</button>
                    </div>
                    <div class="col">
                        <button class="btn-primary">Prueb</button>
                    </div>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection