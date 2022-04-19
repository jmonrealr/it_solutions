@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Editar riesgo</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ url()->previous() }}">Riesgos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Editar riesgo</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card">
                <form action="{{route('riesgos.update',$riesgo->id)}}" method = "POST">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <h4 class="mb-5 font-weight-semibold">Información del riesgo</h4>
                        <div class="row">                         
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Nombre del riesgo</label>
                                    <input required class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Ingresa el nombre del riesgo" name="name" maxlength="22" value="{{$riesgo->name}}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> {{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Descripción --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Descripción:</label>
                                    <textarea required rows="3" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Agrega una breve descripción" maxlength="250">{{$riesgo->description}}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> {{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- solucion --}}
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label class="form-label">Solución del riesgo:</label>
                                    <textarea required rows="3" class="form-control @error('solution') is-invalid @enderror" name="solution" placeholder="Agrega una breve descripción" maxlength="250">{{$riesgo->solution}}</textarea>
                                    @error('solution')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> {{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <a role="button" class="btn btn-outline-dark" href="{{ url()->previous() }}">
                            <i class="feather feather-corner-down-left sidemenu_icon"></i>
                            Regresar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="feather  feather-save sidemenu_icon"></i>
                            Guardar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- End Row-->
@endsection
