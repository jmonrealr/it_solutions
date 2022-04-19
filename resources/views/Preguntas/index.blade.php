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
        <h4 class="page-title">Preguntas y respuestas</h4>
    </div>
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ventana1">
                    Agregar pregunta
                </button>
                <!-- VENTANA EMERGENTE -->
                <div class="modal fade" id="ventana1" >
                    <div class="modal-dialog">
                        <div class="modal-content" Style="border-radius: 20px;">
                            <!-- HEADER DE LA VENTANA-->
                            <div class="modal-header">
                            <h2 class="modal-title" style="font-size: 20px; font-weight: bold;">Agregar una pregunta</h2>
                                <button type="button" class="close" data-dismiss="modal" >&times;</button>
                            </div>

                            <!-- CONTENIDO DE LA VENTANA-->
                            <div class="modal-body">
                            <div class="row">
                                <form action="{{route('preguntas.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                    <h5 class="mb-5 font-weight-semibold">En esta sección podrás agregar una pregunta exponiendo alguna duda que tenga. Sea libre de hacerlo.</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Titulo</label>
                                                    <input required class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Ingresa el titulo de tu pregunta" name="name" maxlength="100" value="{{ old('name') }}">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong> {{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Descripción</label>
                                                    <textarea required class="form-control @error('description') is-invalid @enderror" type="text" placeholder="Ingresa una breve descripción" name="description" maxlength="250" cols="50" rows="6"></textarea>
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong> {{ $message }}</strong>
                                                        </span>
                                                    @enderror
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
        <div class="col-10">
            @foreach ($preguntas as $pregunta)
            <div class="media">
                <img class="avatar" src="images/usuario.png" width="64" height="64" alt="" />
                <div class="media-body">
                   <p class="nombre">{{$pregunta->user->name}} <span class="font-weight-bold fs-18">{{$pregunta->name}}</span></p>
                   <p class="comentario">
                    {{$pregunta->description}}
                   </p>
                   {{-- <div class="text-right">
                        <span>{{$comentario->hora}}, {{$comentario->dia}}</span>
                    </div> --}}

                    @foreach ($pregunta->answers as $respuesta)
                    <div class="media">
                        <img class="avatar" src="images/usuario.png" width="64" height="64" alt="" />
                            <div class="media-body">
                                <p class="nombre">{{$respuesta->user->name}}</p>
                                <p class="comentario">
                                    {{$respuesta->description}}
                                </p>
                                {{-- <div class="text-right">
                                    <span>7:51pm, Hoy</span>
                                </div> --}}
                            </div>
                        </div>
                    @endforeach                    
                    {{-- <form action="#" method="POST"> --}}
                    <form action="{{route('respuestas.store', $pregunta->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea required class="form-control" type="text" placeholder="Agrega una respuesta" name="description" maxlength="250" cols="40" rows="5"></textarea>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-outline-dark" onclick="">
                                Agregar respuesta
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination justify-content-end mt-8">
            {!! $preguntas->links() !!}
        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection