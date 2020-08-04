@extends('layout')

@section('title', 'Contact')

@section('content')

	<div class="container">

		<div class="row">

			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				
				<!-- @include('partials.session-status') -->

				<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('message.store') }}">

					@csrf

					<h1 class="display-5">@lang('Contact')</h1>

					<hr>
						
					<div class="form-group">
						
						<label for="nombre">Nombre</label>

						<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" 
								id="name" 
								type="text" 
								name="name" 
								placeholder="Nombre completo..." 
								value="{{ old('name') }}">						

						@error('name')
							
							<span class="invalid-feedback" role="alert">
									
								<strong>{{ $message ?? '' }}</strong>

							</span>	

						@enderror

					</div>
					
					<div class="form-group">

						<label for="correo">Correo Electrónico</label>

						<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
							id="email" 
							type="text"
							name="email"
							placeholder="Tú correo..."
							value="{{ old('email') }}">

						@error('email')
							
							<span class="invalid-feedback" role="alert">
									
								<strong>{{ $message ?? '' }}</strong>

							</span>	

						@enderror

					</div>
					
					<div class="form-group">

						<label for="asunto">Asunto</label>

						<input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
							id="subject" 
							type="text"
							name="subject"
							placeholder="Asunto..."
							value="{{ old('subject') }}">

						@error('subject')
							
							<span class="invalid-feedback" role="alert">
									
								<strong>{{ $message ?? '' }}</strong>

							</span>	

						@enderror
					
					</div>
					
					<div class="form-group">

						<label for="asunto">Descripción</label>
						
						<textarea class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
							id="content" 
							name="content"
							placeholder="Tú mensaje...">{{ old('content') }}
						</textarea>
						
						@error('content')
							
							<span class="invalid-feedback" role="alert">
									
								<strong>{{ $message ?? '' }}</strong>

							</span>	

						@enderror

					</div>

					<button class="btn btn-primary btn-block">Envíar</button>

				</form>

			</div>
			
		</div>
		
	</div>

@endsection