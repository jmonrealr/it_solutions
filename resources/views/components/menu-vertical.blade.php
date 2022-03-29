<!--aside open-->
<aside class="app-sidebar">
	<div class="app-sidebar__logo">
		<a class="header-brand" href="/">
			<img src="{{ asset('images/logoExtendido.png') }}" class="header-brand-img dark-logo" alt="Banquetes Cristy">
            <img src="{{ asset('images/logo.png') }}" class="header-brand-img mobile-logo" alt="Banquetes Cristy">
		</a>
	</div>
	<div class="app-sidebar3">

		<ul class="side-menu">
			<li class="slide">
				<a class="side-menu__item {{ Request::is('/') ? 'active' : '' }}" data-toggle="slide" href="/" id="/">
					<span class="side-menu__label">Dashboard</span>
				</a>
			</li>

             <li class="slide">
				<a class="side-menu__item {{ Request::is('anuncios') ? 'active' : '' }}" data-toggle="slide" href="/anuncios" id="anuncios">
					<span class="side-menu__label">Anuncios</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item  {{ Request::is('bd') ? 'active' : '' }}" data-toggle="slide" href="/bd" id="bd">
					<span class="side-menu__label">Bases de datos</span>
				</a>
			</li>


            <li class="slide">
				<a class="side-menu__item {{ Request::is('comentarios') ? 'active' : ''}}" data-toggle="slide" href="/comentarios" id="comentarios">
					<span class="side-menu__label">Comentarios</span>
				</a>
			</li>

            <li class="slide">
				<a class="side-menu__item {{ Request::is('contactos') ? 'active' : ''}}" data-toggle="slide" href="/contactos" id="contactos">
					<span class="side-menu__label">Contactos</span>
				</a>
			</li>

            <li class="slide">
				<a class="side-menu__item {{ Request::is('contratos') ? 'active' : ''}}" data-toggle="slide" href="/contratos" id="contratos">
					<span class="side-menu__label">Contratos</span>
				</a>
			</li>

            <li class="slide">
				<a class="side-menu__item {{ Request::is('departamentos') ? 'active' : '' }}" data-toggle="slide" href="/departamentos" id="departamentos">
					<span class="side-menu__label">Departamentos</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('eventos') ? 'active' : '' }}" data-toggle="slide" href="/eventos" id="eventos">
					<span class="side-menu__label">Eventos</span>
				</a>
			</li>
			
			<li class="slide">
				<a class="side-menu__item {{ Request::is('empleados') ? 'active' : '' }}" data-toggle="slide" href="/empleados" id="empleados">
					<span class="side-menu__label">Empleados</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('modelos') ? 'active' : '' }}" data-toggle="slide" href="/modelos" id="modelos">
					<span class="side-menu__label">Modelos</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('preguntas') ? 'active' : '' }}" data-toggle="slide" href="/preguntas" id="preguntas">
					<span class="side-menu__label">Preguntas</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('proyectos') ? 'active' : '' }}" data-toggle="slide" href="/proyectos" id="proyectos">
					<span class="side-menu__label">Proyectos</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('riesgos') ? 'active' : '' }}" data-toggle="slide" href="/riesgos" id="riesgos">
					<span class="side-menu__label">Riesgos</span>
				</a>
			</li>

			<li class="slide">
				<a class="side-menu__item {{ Request::is('configuracion') ? 'active' : '' }}" data-toggle="slide" href="/configuracion" id="configuraciones">
					<span class="side-menu__label">Configuraciones</span>
				</a>
			</li>
		</ul>
	</div>
</aside>