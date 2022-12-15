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
		<style>
			html {height: 100%;}
			body {
				display: flex;
				flex-direction: column;
				min-height: 100%;
			}
			footer {
				margin-top:auto;
 					 }
		</style>
    </head>
	
    <body>
        <!-- Menú superior-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand col-md-4" href="/queVEO">QueVEO</a>
            </div>
        </nav>
        <!-- Contenido del index-->
        <?php 
			echo $content_for_layout;
		?>

		<script type="text/javascript" src="bootstrap/js/nuevo_usuario.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/bootstrap/js/scripts.js"></script>


		
    </body>
	<footer class="bg-light text-center text-lg-start">
  		<div class="text-center p-1" style="background-color: black;">
    		<span class="text-light">© 2022 QueVEO - Pablo Hernández Uz</span>
  		</div>
	</footer>
</html>
