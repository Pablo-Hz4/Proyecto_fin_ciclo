
<div class="container">
	<div class="row mb-3">
		<div class="col-lg-12 text-lett">
			<h2 class="mt-5">Añadir película</h2>
		</div>
	</div>

	<div class="container ">
		<form role="form" action="/queveo/admin/nueva_peli/" method="post">  <!-- En el action indicamos que vaya a la ruta "datos_usuario". Esa ruta nos lleva al controlador NuevoUsuarioController y al método add_usuario --> 		  
			<div class="row mb-3">
					<label for="titulo" class="col-1 col-form-label">Título</label>
					<div class="col-5 text-center">
						<input class="form-control" id="titulo" name="titulo" placeholder="Introduzca título de la película">
					</div>
			</div>

			<div class="row mb-3">
					<label for="fecha" class="col-1 col-form-label">Fecha</label>
					<div class="col-5 text-center">
						<input class="form-control" id="fecha" name="fecha" placeholder="Introduzca fecha">
					</div>
			</div>

			<div class="row mb-3">
					<label for="genero" class="col-1 col-form-label">Género</label>
					<div class="col-5 text-center">
						<input class="form-control" id="genero" name="genero" placeholder="Introduzca género">
					</div>
			</div>

			<div class="row mb-3">
					<label for="duracion" class="col-1 col-form-label">Duración</label>
					<div class="col-5 text-center">
						<input class="form-control" id="duracion" name="duracion" placeholder="Introduzca duración">
					</div>
			</div>

			<div class="row mb-3">
					<label for="poster" class="col-1 col-form-label">Poster</label>
					<div class="col-5 text-center">
						<input class="form-control" id="poster" name="poster" placeholder="Introduzca poster">
					</div>
			</div>

			<div class="row mb-3">
					<label for="director" class="col-1 col-form-label">Director</label>
					<div class="col-5 text-center">
						<input class="form-control" id="director" name="director" placeholder="Introduzca director">
					</div>
			</div>

			<div class="row mb-3">
					<label for="sinopsis" class="col-1 col-form-label">Sinopsis</label>
					<div class="col-5 text-center">
						<input class="form-control" id="sinopsis" name="sinopsis" placeholder="Introduzca sinopsis">
					</div>
			</div>

			<div class="row mb-3">
					<label for="reparto" class="col-1 col-form-label">Reparto</label>
					<div class="col-5 text-center">
						<input class="form-control" id="reparto" name="reparto" placeholder="Introduzca reparto">
					</div>
			</div>


			<button type="submit" class="btn btn-primary" id="enviar">Enviar</button>
		</form>
	</div>

</div>
