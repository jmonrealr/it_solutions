@extends('templates.main')



<style>
    body {
        background: #f2f2f2;
    }
    .comentarios{
        margin: 20px 0;
    }

    .media{
        border-top: 1px solid #bfbfbf;
        padding-top: 20px;
    }
    .media img{
        margin-right: 20px;
    }
    .media .nombre{
        color: #4b65d1;
        margin-bottom: 0;
    }
    .media .nombre span{
        font-size: 12px;
        color: #464646;
        margin-left: 10px;
    }
    .media .comentario{
        margin-top: 10px;
    }

    /* ul.pagination li:first-child, ul.pagination li:last-child{display: none;} */
    nav .justify-between a, nav p{display: none;}
</style>


@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Comentarios</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ventana1">
                    Agregar comentario
                </button>
                <!-- VENTANA EMERGENTE -->
                <div class="modal fade" id="ventana1" >
                    <div class="modal-dialog">
                        <div class="modal-content" Style="border-radius: 20px;">
                            <!-- HEADER DE LA VENTANA-->
                            <div class="modal-header">
                            <h2 class="modal-title" style="font-size: 20px; font-weight: bold;">Agregar un comentario</h2>
                                <button type="button" class="close" data-dismiss="modal" >&times;</button>
                            </div>

                            <!-- CONTENIDO DE LA VENTANA-->
                            <div class="modal-body">
                            <div class="row">
                                <form action="{{route('comentarios.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                    <h5 class="mb-5 font-weight-semibold">En esta sección podrás agregar un comentario exponiendo alguna duda o queja que se tenga contra algún trabajador. Sea libre de hacerlo.</h5>
                                        {{-- <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Área de trabajo</label>
                                                    <input class="form-control" type="text" placeholder="Ingresa tu departamento" name="departamento" maxlength="22" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Nombre completo</label>
                                                     <input class="form-control" type="text" placeholder="Ingresa tu nombre completo" name="nombre" maxlength="16" value="{{$usuario->name}}"readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Correo electronico</label>
                                                    <input class="form-control" type="text" placeholder="Ingresa tu correo electronico" name="email" maxlength="16" value="{{$usuario->email}}" readonly>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Comentario</label>
                                                    <textarea class="form-control" type="text" placeholder="Ingresa tu comentario" name="body" maxlength="250" cols="50" rows="6"></textarea>
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


<!-- FIN CABECERA -->



<!-- CONTENIDO -->

<div class="container">
    <div class="row comentarios justify-content-center" style="width:1000px; height:400px; overflow: scroll;">
        <div class="col-8">
            @foreach ($comentarios as $comentario)
            <div class="media">
                <img class="avatar" src="images/usuario.png" width="64" height="64" alt="" />
                <div class="media-body">
                   <p class="nombre">{{$comentario->user->name}} <span>Departamento</span></p>
                   <p class="comentario">
                    {{$comentario->body}}
                   </p>
                   <div class="text-right">
                        <span>{{$comentario->hora}}, {{$comentario->dia}}</span>
                    </div>
                   {{-- <div class="media">
                    <img class="avatar" src="images/usuario.png" width="64" height="64" alt="" />
                        <div class="media-body">
                            <p class="nombre">Leilany <span>Área de Riesgos</span></p>
                            <p class="comentario">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis eligendi illo ex repudiandae quaerat laborum quisquam obcaecati! Reprehenderit optio voluptatum similique voluptatem? Quibusdam, accusantium vel! Aspernatur mollitia odit magnam nisi.
                            </p>
                            <div class="text-right">
                                <span>7:51pm, Hoy</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination justify-content-end mt-8">
            {!! $comentarios->links() !!}
        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection


