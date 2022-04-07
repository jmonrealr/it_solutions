@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Departamentos</h4>
    </div>
    {{-- DESCOMENTAR DIV PARA MOSTRAR BOTON DE AGREGAR --}}
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="departamentos/create" class="btn btn-primary mr-3">
                    Agregar proyecto</a>
            </div>
        </div>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"><a class="btn btn-default btn-lg btn-space" role="button" style="width: 650px; height: 55px; background: none;" href="#">Departamento de dirección general</a>
                            <a class="btn btn-default btn-lg btn-space" role="button" style="margin-top: 40px; width: 650px; height: 55px; background: none;" href="#">Departamento de Finanzas</a>
                            <a class="btn btn-default btn-lg btn-space" role="button" style="margin-top: 40px; width: 650px; height: 55px; background: none;" href="#">Departamento de mercadotecnica</a>
                            <a class="btn btn-default btn-lg btn-space" role="button" style="margin-top: 40px; width: 650px; height: 55px; background: none;" href="#">Departamento de comunicaciones</a>
                            <a class="btn btn-default btn-lg btn-space" role="button" style="margin-top: 40px; width: 650px; height: 55px; background: none;" href="#">Departamento de gestión, planificación, y estrategía de servicio</a>
                            <a class="btn btn-default btn-lg btn-space" role="button" style="margin-top: 40px; width: 650px; height: 55px; background: none;" href="#">Departamento a atención a clientes y usuarios</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-default btn-lg btn-space" role="button" style="width: 680px; height: 55px; background: none;" href="#">Departamento de riesgos</a>
                        <a class="btn btn-default btn-lg btn-space" role="button" style="margin-top: 40px; width: 680px; height: 55px; background: none;" href="#">Departamento de negocios y aplicaciones empresariales</a>
                        <a class="btn btn-default btn-lg btn-space" role="button" style="margin-top: 40px; width: 680px; height: 55px; background: none;" href="#">Departamento de desarrollo y nuevas tecnologías </a>
                        <a class="btn btn-default btn-lg btn-space" role="button" style="margin-top: 40px; width: 680px; height: 55px; background: none;" href="#">Departamento de sistemsas e infraestructura</a>
                        <a class="btn btn-default btn-lg btn-space" role="button" style="margin-top: 40px; width: 680px; height: 55px; background: none;" href="#">Departamento de Recursos Humanos</a>
                    </div>
                </div>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- FIN CONTENIDO -->
@endsection