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
    </head>
	
    <body>
        <!-- Menú superior-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand col-md-10" href="/queVEO">QueVEO</a>
                <div class="collapse navbar-collapse col-md-4" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item"><a class="nav-link" href="/queVEO">Logout</a></li>
						<li class="nav-item"><a class="nav-link" href="/blog/admin/login">Añadir nueva</a></li>
						<li class="nav-item"><a class="nav-link" href="/blog/admin/login">Cargar base de datos</a></li>
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
