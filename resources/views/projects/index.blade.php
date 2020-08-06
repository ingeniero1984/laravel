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

		<div class="d-flex flex-wrap justify-content-between align-items-start">

			@forelse($projects as $project)

				<div class="view overlay shadow mt-4 mx-auto" style="width: 18rem">

					@if($project->image)

						<img class="card-img-top" 
						src="/storage/{{ $project->image }}"
		     			alt="{{ $project->title }}"
		     			>
					@endif
					
					<div class="card-body">

						<h4 class="card-title">
								
							<a	href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>

						</h4>

						<h5 class="card-subtitle">{{ $project->created_at->format('d/m/Y') }}</h5>

						<p class="card-text text-truncate">{{ $project->description }}</p>

						<a href="{{ route('projects.show', $project) }}"
							class=" btn btn-primary btn-sm shadow">Ver más...</a>
							
					</div>

				</div>
		
			@empty

				<li class="list-group-item border-0 mb-3 shadow">
					No hay proyectos disponibles.
				</li>

			@endforelse

			{{ $projects->links() }}
		</div>

	</div>

@endsection