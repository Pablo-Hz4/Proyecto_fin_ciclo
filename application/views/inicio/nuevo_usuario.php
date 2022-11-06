
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
			<h2 class="mt-5">Nuevo Usuario</h2>
		</div>
	</div>

	<div class="container ">
		<form role="form" action="/queveo/datos_usuario" method="post">  <!-- En el action indicamos que vaya a la ruta "datos_usuario". Esa ruta nos lleva al controlador NuevoUsuarioController y al método add_usuario --> 
			<div class="row mb-3">
				<label for="usuario" class="col-1 col-form-label">Usuario</label>
				<div class="col-5 text-center">
					<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Introduzca usuario">
				</div>
          </div>

		  <div class="row mb-3">
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
	
		  <button type="submit" class="btn btn-primary" id="enviar">Enviar</button>
		</form>
	</div>

</div>

<!-- Page Content -->
 <!-- <div class="container">
    <div class="row">
      <div class="col-lg-12 text-lett">
        <h2 class="mt-5">Nuevo Usuario</h2>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col-lg-12 text-left">
       
        <form class="g-3 mt-3" role="form" action="/add_autor" method="post">


          <div class="form-group row">
            <label for="display_name" class="col-lg-2 col-form-label">Nombre</label>
             
              <div class="col-lg-5 text-lett">
                <input type="text" class="form-control" id="display_name" name="display_name" placeholder="">
            </div>
           
          </div>

          <div class="form-group row">
            <label for="email" class="col-lg-2 col-form-label">Email</label>
             
              <div class="col-lg-8 text-lett">
                  <input type="text" class="form-control" id="email" name="email" placeholder="">
            </div>
             
          </div>

          <div class="form-group row">
            <label for="password" class="col-lg-2 col-form-label">Contraseña</label>
             
              <div class="col-lg-5 text-lett">
                <input type="password" class="form-control" id="password" name="password" placeholder="">
            </div>
           
          </div>
   
          
          <div class="form-group row">
            <label for="enabled" class="col-lg-2 col-form-label">Activado</label>
             
              <div class="col-lg-3 text-lett">
                <input type="checkbox"  id="enabled" name="enabled">
            </div>
            
          </div>



          <br><br>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <br><br>
      </div>
    </div>

  </div> 



 -->
