<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'It Solutions') }}</title>

        <!-- Bootstrap css -->
		<link href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet" />
		<!-- Style css -->
		<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
		<!--Sidemenu css -->
        <link  href="{{ asset('css/sidemenu.css') }}" rel="stylesheet">
		<!-- P-scroll bar css: Desplazamiento en panel de navegación-->
		<link href="{{ asset('plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

		<!-- Fuente Poppins -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!-- FONTAWESOME -->
        <script src="https://kit.fontawesome.com/a36cdd0297.js" crossorigin="anonymous"></script>

		<!-- DataTables -->
		<link href="{{ asset('plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
        @yield('extra-css')
    </head>



	<body class="app sidebar-mini" id="index1">


		<div class="page">
			<div class="page-main">

                <!--aside open-->
				<x-menu-vertical />
				<!--aside closed-->

				<div class="app-content main-content">
					<div class="side-app">

                    <!--app header-->
                    <x-navbar />
                    <!--/app header-->
						<!--Row-->
						@include('sweetalert::alert')
						@yield('content')

                    </div>
				</div><!-- end app-content-->
			</div>
		</div>

		<!-- JQuery-->
		<script src="{{ asset('plugins/jquery.min.js') }}"></script>
		<!-- Bootstrap5 js-->
		<script src="{{ asset('plugins/bootstrap/popper.min.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
		<!--Ocultar/Mostrar panel de navegación-->
		<script src="{{ asset('plugins/sidemenu/sidemenu.js') }}"></script>
		<!-- P-scroll js: Desplazamiento en panel de navegación-->
		<script src="{{ asset('plugins/p-scrollbar/p-scrollbar.js') }}"></script>
		<script src="{{ asset('plugins/p-scrollbar/p-scroll1.js') }}"></script>
		<!-- Custom js-->
		<script src="{{ asset('js/custom.js') }}"></script>

		<!-- DataTable -->
		<script type="text/javascript" src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/datatables/dataTables.bootstrap5.min.js') }}"></script>
		<script type="text/javascript">
    		$(document).ready( function () {
    		     $(".dt").DataTable({
    		        "language": {
    		            "url": "{{asset('plugins/datatables/es-mx.json')}}"
    		        }
    		    });
    		});
    		$('.show_confirm').click(function(event) {
    		      var form =  $(this).closest("form");
    		      event.preventDefault();
    		      swal({
    		          title: "¿Esta seguro de eliminar este registro?",
    		          icon: "warning",
    		          buttons: true,
    		          dangerMode: true,
    		          buttons: ["Cancelar", "Eliminar"],
    		      })
    		      .then((willDelete) => {
    		        if (willDelete) {
    		          form.submit();
    		        }
    		      });
    		  });
	</script>

		@yield('extra-script')
	</body>
</html>
