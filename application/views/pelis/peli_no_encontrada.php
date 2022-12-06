<?php

        # Si existe la variable error que envia el controlador NuevoUsuarioController/add_usuario mostraremos el error.
        if ( isset( $error))
        {
          echo "<div class='alert alert-danger text-center'>$error</div>";
        }

?>

