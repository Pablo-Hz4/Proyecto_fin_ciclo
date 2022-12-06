<?php

        # Si existe la variable error que envia el controlador NuevoUsuarioController/add_usuario mostraremos el error.
        if ( isset( $result))
        {
          echo "<div class='alert alert-danger text-center'>$result</div>";
        }

		

?>
