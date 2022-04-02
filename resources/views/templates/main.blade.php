<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'It Solutions') }}</title>

        <!-- Bootstrap css -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
						@yield('content')

                    </div>
				</div><!-- end app-content-->
			</div>
		</div>

		<!-- JQuery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<!-- Bootstrap5 js-->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		<!--Ocultar/Mostrar panel de navegación-->
		<script src="{{ asset('plugins/sidemenu/sidemenu.js') }}"></script>
		<!-- P-scroll js: Desplazamiento en panel de navegación-->
		<script src="{{ asset('plugins/p-scrollbar/p-scrollbar.js') }}"></script>
		<script src="{{ asset('plugins/p-scrollbar/p-scroll1.js') }}"></script>
		<!-- Custom js-->
		<script src="{{ asset('js/custom.js') }}"></script>

		@yield('extra-script')
	</body>
</html>
