@extends('templates.main')

@section('content')

<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Departamentos</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ventana1">
                    Agregar departamento
                </button>

                <!-- VENTANA EMERGENTE -->
                <div class="modal fade" id="ventana1" >
                    <div class="modal-dialog">
                        <div class="modal-content" Style="border-radius: 20px;">
                            <!-- HEADER DE LA VENTANA-->
                            <div class="modal-header">
                            <h2 class="modal-title" style="font-size: 20px; font-weight: bold;">Agregar un departamento</h2>
                                <button type="button" class="close" data-dismiss="modal" >&times;</button>
                            </div>

                            <!-- CONTENIDO DE LA VENTANA-->
                            <div class="modal-body">
                            <div class="row">
                                <form action="{{route('departamentos.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Nombre del departamento</label>
                                                    <input class="form-control" type="text" placeholder="Ej. Departamento de Finanzas" name="name" maxlength="250">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">
					                        Guardar</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @isset($departamentos)
                        @foreach ($departamentos as $departamento)
                        <div class="col-xl-5 col-md-5 col-lg-5 bg-white p-4 ml-3 mb-5 rounded border shadow ">
                            <a role="button" href="{{route('departamentos.show',$departamento->id)}}">{{$departamento->name}}</a>
                            {{-- <a class="btn btn-default bg-white pl-5 pr-5" role="button" href="">{{$departamento->name}}</a> --}}
                        </div>
                        @endforeach
                    @endisset
                </div>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- FIN CONTENIDO -->
@endsection