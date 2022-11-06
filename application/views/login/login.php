
<!-- Page Content -->
<?php

        # Si existe la variable error que envia el controlador NuevoUsuarioController/add_usuario mostraremos el error.
        if ( isset( $error))
        {
          echo "<div class='alert alert-danger text-center'>$error</div>";
        }

?>
<div class="container">
	<div class="row mb-3">
		<div class="col-lg-12 text-lett">
			<h2 class="mt-5">Login</h2>
		</div>
	</div>

	<div class="container ">
		<form role="form" action="/queveo/registro" method="post">  <!-- En el action indicamos que vaya a la ruta "datos_usuario". Esa ruta nos lleva al controlador NuevoUsuarioController y al método add_usuario --> 		  <div class="row mb-3">
				<label for="email" class="col-1 col-form-label">Email</label>
				<div class="col-5 text-center">
					<input type="email" class="form-control" id="email" name="email" placeholder="Introduzca correo electrónico">
				</div>
          </div>

		  <div class="row mb-3">
				<label for="pass" class="col-1 col-form-label">Contraseña</label>
				<div class="col-5 text-center">
					<input type="password" class="form-control" id="pass" name="pass" placeholder="Introduzca contraseña">
				</div>
          </div>
	
		  <button type="submit" class="btn btn-primary" id="enviar">Entrar</button>
		</form>
	</div>

</div>
