<?php
//$lon=sizeof($pelis);
// $result = file_get_contents("pelis.json");
// $pelis = json_decode($result, true);
?>



<div class="container">
            <div class="text-center mt-5">
                <h1>QueVEO</h1>
                <div class="row">
				<?php 
					foreach ($data as $peli) { ?>
						<div class="col-4 mb-4 mt-4"></div>
						<div class="col-4 mb-4 mt-4">
							<div class="row">
								<img src="<?php echo $peli['poster']; ?>" alt="">
							</div>
							<p hidden id="idPeli"><?php echo $peli['id']; ?></p>
							<div class="row">
								<h3><?php echo $peli['titulo']; ?></h3>
								<?php if(array_key_exists('usuario', $_SESSION) && $peli['fav']==true){?>
									<button id="fav" type="button" class="btn btn-warning">Favorita</button>
								<?php }elseif(array_key_exists('usuario', $_SESSION) && $peli['fav']==true){ ?>
									<button id="fav" type="button" class="btn btn-outline-primary">Favorita</button>
								<?php } ?>
							</div>
							<div class="row">
								<p> <span class="fw-bold">Fecha: </span> <?php echo $peli['fecha']; ?></p>
							</div>
							<div class="row">
								<p><span class="fw-bold">Genero: </span> <?php echo $peli['genero']; ?></p>
							</div>
							<div class="row">
								<p><span class="fw-bold">Duración: </span> <?php echo $peli['duracion']; ?></p>
							</div>
							<div class="row">
								<p><span class="fw-bold">Director: </span> <?php echo $peli['director']; ?></p>
							</div>
							<div class="row">
								<p><span class="fw-bold">Reparto: </span> <?php echo $peli['reparto']; ?></p>
							</div>
						</div>
						<div class="col-4 mb-4 mt-4"></div>
				<?php } ?>
				</div>
            </div>
</div>
<script type="text/javascript" src="/queveo/bootstrap/js/favorita.js"></script>
