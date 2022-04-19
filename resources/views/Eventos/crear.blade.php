@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Agregar evento</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="{{ route('eventos.index') }}">Eventos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Agregar evento</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->




<div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card">
                    <form action="{{route('eventos.store')}}" method = "POST">
                        @csrf
                    <div class="card-body">
                        <h4 class="mb-5 font-weight-semibold">Información del evento</h4>
						<div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nombre del evento</label>
                                    <input id="name" class="form-control @error('name') is-invalid @enderror" type="text"
                                           placeholder="Ingresa el nombre del evento" name="name" maxlength="50"
                                           autofocus required value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> {{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
						</div>
                        <div class="row">
                            {{-- Descripción --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description" class="form-label">Descripción:</label>
                                    <textarea id="description" rows="3" class="form-control @error('description') is-invalid @enderror"
                                              name="description" placeholder="Agrega una breve descripción"
                                              maxlength="250">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> {{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
							{{-- fecha --}}
							<div class="col-md-4">
								<div class="form-group">
									<label for="start_date" class="form-label">Fecha</label>
									<input id="start_date" class="form-control @error('start_date') is-invalid @enderror" required
                                           type="date" name="start_date" value="{{ now()->format('Y-m-d') }}" min="2016-01-01"
                                           max="2030-12-31" >
                                    @error('start_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong> {{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
							</div>
                        </div>
                        <div class="row">
                            {{-- Dirección --}}
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="location" class="form-label">Dirección</label>
                                    <textarea id="location" rows="3" class="form-control @error('location') is-invalid @enderror" required
                                              name="location" placeholder="Agrega la dirección del evento"
                                              maxlength="250">{{ old('location') }}</textarea>
                                    @error('location')
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
                            Guardar
                        </button>
                    </div>
                </form>
                </div>
            </div>
</div>
        <!-- End Row-->
@endsection
