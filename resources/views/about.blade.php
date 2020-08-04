@extends('layout')

@section('title', 'About')

@section('content')

	<div class="container">
	
		<div class="row">

			<div class="col-12 col-lg-6">
				
				<h1 class="display-5 text-primary">Desarrollador Web</h1>

				<hr>

				<h5 class="about lead text-secondary">
					
					Hola, Soy Lermy Ferrer Peralta Ingeniero de Sistemas de la Corporación Universitaria Latinoamericana (CUL) de Barranquilla - colombia, Me desempeño como Desarrollador Web en la empresa <a href="https://www.insoftar.com/" target="_blank">Insoftar S.A.S</a>

				</h5>

				<h5 class="about lead text-secondary">
					
					Me apaciona las ganas de aprender y conocer nuevas tecnologías, trabajando en proyectos profesionales usando el Framework Laravel como API REST, Librerias como Jquery, Angular y buen manejo del control de versiones GIT.

				</h5>

				<br>

				<a class="btn btn-block btn-primary" href="{{ route('contact') }}">

					Contáctame

				</a>

				<a class="btn btn-block btn-outline-primary" href="{{ route('projects.index') }}">

					Mis Portafolios

				</a>

			</div>

			<div class="col-12 col-lg-6">

				<img class="img-fluid mb-4" src="/img/designer.svg" alt="Desarrollador Web">
				
			</div>
			
		</div>

	</div>

@endsection