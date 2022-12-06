<?php
//$lon=sizeof($pelis);
// $result = file_get_contents("pelis.json");
// $pelis = json_decode($result, true);
?>



<div class="container">
            <div class="text-center mt-5">
                <h1>QueVEO</h1>
                <p class="lead">Nuestras recomendadas</p>
                <div class="row">
				<?php 
					foreach ($contenido as $peli) { ?>
						<div class="col-3 mb-4 mt-4">
							<p hidden><?php echo $peli['id']; ?></p>
							<div class="row">
								<img src="<?php echo $peli['poster']; ?>"  height="500" alt="">
							</div>
							<div class="row">
								<h3><a href="/queveo/peli/<?php echo $peli['id']; ?>"><?php echo $peli['titulo']; ?></a></h3>
							</div>
						</div>
				<?php } ?>
				</div>
            </div>
</div>


