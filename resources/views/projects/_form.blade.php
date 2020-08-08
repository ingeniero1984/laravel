
@csrf

<div class="container">
	
	<div class="form-group">
		
		<label for="titulo">Título del Proyecto</label>

			<input class="form-control bg-light shadow"
					type="text"
					id="title" 
					name="title"
					placeholder="Ingresa tu titulo..." 
					value="{{ old('title', $project->title ?? '') }}"
			>

	</div>

	<div class="form-group">
		
		<label for="url">Url</label>

			<input class="form-control bg-light shadow" 
					type="text" 
					id="url" 
					name="url"
					placeholder="Ingresa tu Url ej: mi-proyecto-desde-cero" 
					value="{{ old('url', $project->url ?? '') }}"
			>

	</div>

		<div class="form-group">

	<label>Descripción </label>

		<textarea class="form-control bg-light shadow"
				id="description"
				placeholder="Ingresa la descripción del proyecto..." 
				name="description">{{ old('description', $project->description ?? '') }}

		</textarea>

	</div>

	<div class="custom-file">

		<input type="file" name="image" class="custom-file-input" id="customFile">

		<label class="custom-file-label" for="customFile">Cargar imagen</label>
		
	</div>
	
</div>

<br>