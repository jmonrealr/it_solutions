@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Configuración de la cuenta</h4>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">

        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card">
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <h4 class="mb-5 font-weight-semibold">Información básica</h4>

                        <div class="row">
                            <div class="col-5">
                                <div class="box-widget widget-user">
                                    <div class="widget-user-image d-sm-flex">
                                        <div class="user-pic">
                                            @if(is_null($profile->url_image))
                                                <img src="{{asset('images/usuario.png')}}" id="image" alt="user-img"
                                                     class="avatar-xxl rounded-circle mb-1">
                                            @else
                                                <img src="{{ asset($profile->url_image) }}" id="image" alt="user-img"
                                                     class="avatar-xxl rounded-circle mb-1">
                                            @endif
                                        </div>
                                        <div class="ml-sm-3 mt-4">
                                            <div class="form-group">
                                                <label for="url_image" class="form-label">Foto de perfil</label>
                                                <div class="input-group file-browser">
                                                    <input type="text" class="form-control border-right-0 browse-file"
                                                           placeholder="Cargar otra imagen" readonly
                                                           value="@isset($profile->url_image){{substr(explode('/', $profile->url_image)[1],10)}}@endisset">
                                                    <label class="input-group-append mb-0">
                                                        <span class="btn ripple btn-primary">
                                                            Examinar <input type="file" class="file-browserinput"
                                                                style="display: none;" accept="image/*"
                                                                name="url_image" id="url_image" onchange="previewImage(event)">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row" style="margin-top: 20px" >
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="first_name" class="form-label">Nombre</label>
                                    <input class="form-control @error('first_name') is-invalid @enderror" type="text"
                                           placeholder="Ingresa el nombre del cliente" autofocus
                                           name="first_name" maxlength="50" id="first_name"
                                           value="{{ old('first_name') }}@isset($profile){{$profile->first_name }}@endisset">
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="paternal_last_name" class="form-label">Apellido Paterno</label>
                                    <input class="form-control @error('paternal_last_name') is-invalid @enderror" type="text"
                                           placeholder="Ingresa su apellido paterno" autofocus
                                           name="paternal_last_name" maxlength="50" id="paternal_last_name"
                                           value="{{ old('paternal_last_name') }}@isset($profile){{$profile->paternal_last_name }}@endisset">
                                    @error('paternal_last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="maternal_last_name" class="form-label">Apellido Paterno</label>
                                    <input class="form-control @error('maternal_last_name') is-invalid @enderror" type="text"
                                           placeholder="Ingresa su apellido materno" autofocus
                                           name="maternal_last_name" maxlength="50" id="maternal_last_name"
                                           value="{{ old('maternal_last_name') }}@isset($profile){{$profile->maternal_last_name }}@endisset">
                                    @error('maternal_last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="age" class="form-label">Edad</label>
                                    <input id="age" class="form-control @error('age') is-invalid @enderror"
                                           type="number" value="{{ old('age') }}@isset($profile){{$profile->age}}@endisset"
                                           name="age" step="1" min="18" max="120">
                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="phone_number" class="form-label">Número telefonico</label>
                                    <input id="phone_number" class="form-control @error('phone_number') is-invalid @enderror"
                                           type="text" placeholder="8344444444" name="phone_number"
                                           value="{{ old('phone_number') }}@isset($profile){{$profile->phone_number}}@endisset">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <h4 class="mb-5 font-weight-semibold mt-7">Información empresarial</h4>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="department" class="form-label">Departamento</label>
                                    <input id="department" class="form-control" disabled value="{{ $department->name }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="type" class="form-label">Cargo</label>
                                    <input id="type" class="form-control" disabled value="Cargo">
                                </div>
                            </div>

                        </div>
                        <h4 class="mb-5 mt-7 font-weight-bold">Actividades y Contrato</h4>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Actividades a desempeñar</label>
                                    <div>
                                        @foreach($profile->user->tasks as $task)
                                            <span class="badge rounded-pill bg-primary">{{ $task->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="type_contract" class="form-label">Tipo de contrato</label>
                                    <input id="type_contract" class="form-control" disabled value="Contrato">
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

        <div>

        </div>

    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection
@section('extra-script')
    <script type="text/javascript">
        const previewImage = e => {
            const preview = document.getElementById('image');
            preview.src = URL.createObjectURL(e.target.files[0]);
            preview.onload = () => URL.revokeObjectURL(preview.src);
        };
    </script>
@endsection

