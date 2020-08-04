@extends('layout')

@section('title', 'Home')

@section('content')

	<div class="container">
	
		<div class="row">

			<div class="col-12 col-lg-6">

				<img class="img-fluid mb-4" src="/img/developer.svg" alt="Desarrollador Web">
				
			</div>

			<div class="col-12 col-lg-6">
				<br>
				<br>

				<h1 class="display-5 mundo text-center py-4"> < Hola Mundo /> </h1>

				<br>
				<br>

				<a class="btn btn-block btn-primary" href="{{ route('contact') }}">

					Contáctame

				</a>

				<a class="btn btn-block btn-outline-primary" href="{{ route('projects.index') }}">

					Mis Portafolios

				</a>

			</div>
			
		</div>

	</div>

@endsection