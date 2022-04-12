@extends('templates.main')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Ver modelo "N"</h4>
        <ul class="breadcrumb">
            <li class="mb-1 fs-16"><a href="#">Modelos</a></li>
            <li class="text-muted mb-1 fs-16 ml-2 mr-2"> / </li>
            <li class="text-muted mb-1 fs-16">Ver modelos</li>
        </ul>
    </div>
</div>
<!-- FIN CABECERA -->


<!-- Row -->
<div class="row">
    <div class="col-8 col-md-12 col-lg-12">
        <div class="card">
               <div class="row">
				<div class="col-5">
						<div class="ml-sm-4 mt-5">
							<div class="form-group">
                                   <font style="font-weight:bold; vertical-align:inherit; padding-left:7px;">Modelo: </font>
								<label style="padding-left:7px;" class="form-label">De negocio</label>
							</div>
						</div>
					</div>
				</div>
			<div class="card-body">
                   <div class="row">
                       <div class="col-md-4">
                          <div class="form-group">
                              <font style="vertical-align: inherit; font-weight:bold">Descripción: </font><br>
                              <span class="mb-2 fs-14">Descripcion de modelo de negocio de la empresa Soluciones de TI</span>
                          </div>
                      </div>
                      <div class="col-md-3">
                      <div class="form-group">
                          <font style="vertical-align: inherit; font-weight:bold">Fecha: </font><br>
                          <span class="mb-2 fs-14">01-03-2022</span>
                      </div>
                   </div>
                </div>
		</div>

                <div class="card-footer text-right">
					<a role="button" class="btn btn-outline-dark" href="{{ url()->previous() }}">
					<i class="feather feather-corner-down-left sidemenu_icon"></i>Regresar</a>
			    </div>
	    </div>
	</div>

@endsection
