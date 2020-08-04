@extends('layout')

@section('title', 'Portfolio')

@section('content')

	<div class="container">

		<div class="d-flex justify-content-between align-items-center">
			
			<h1 class="display-5 mb-0">@lang('Projects')</h1>
			
			@auth

				<a class="btn btn-primary" href="{{ route('projects.create') }}">
					Crear proyecto
				</a>
				
			@endauth

		</div>

		<hr>

		<!-- <p class="lead text-secondary">
				Proyectos realizados Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation.
			</p> -->

		<ul class="list-group">
			@forelse($projects as $project)

				<li class="list-group-item border-0 mb-3 shadow">
					<a class="text-secondary d-flex justify-content-between align-items-center" href="{{ route('projects.show', $project) }}">

						<span class="font-weight-bold">
							{{ $project->title }}
						</span>

						<span>
							{{ $project->created_at->format('d/m/Y') }}
						</span>

					</a>
				</li>
		
			@empty

				<li class="list-group-item border-0 mb-3 shadow">
					No hay proyectos disponibles.
				</li>

			@endforelse

			{{ $projects->links() }}
		</ul>

	</div>

@endsection