<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>QueVEO</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/bootstrap/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/bootstrap/css/styles.css" rel="stylesheet" />
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    </head>
	
    <body>
        <!-- Menú superior-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand col-md-4" href="/queveo/inicio_usuario">QueVEO</a>
				<form class="d-flex col-md-4" role="search">
					<input class="form-control me-2" type="search" placeholder="Introduzca película" aria-label="Buscar">
					<button class="btn btn-outline-light" type="submit">Buscar</button>
				</form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item"><a class="nav-link" href="/queveo/usuario"><?php echo $_SESSION['usuario']?></a></li>
						<li class="nav-item"><a class="nav-link" href="/queveo/">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Contenido del index-->
        <?php 
			echo $content_for_layout;
		?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/bootstrap/js/scripts.js"></script>
    </body>
</html>
