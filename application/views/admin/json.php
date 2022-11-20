<?php
//$lon=sizeof($pelis);
$result = file_get_contents("pelis.json");
$pelis = json_decode($result, true);
// foreach ($pelis as $peli) {
//     echo '<pre>';
//     echo ($peli['titulo']);
//     echo '<pre>';
//     print_r($peli['duracion']);
//     echo '<pre>';
//     print_r($peli['director']);
//     echo '</pre>';
//     echo '------------------';
// }
?>

<div class="container">
<div class="row">
	<div class="p-2 d-grid gap-2 d-md-flex justify-content-md-end">
		<button type="button" class="btn btn-primary" id="cargar">Cargar</button>
		
	</div>
	<?php 
		foreach ($pelis as $peli) { ?>
			
				<div class="row">
					<p><?php echo $peli['titulo']; ?></p>
				</div>
				<div class="row">
					<p><?php echo $peli['fecha']; ?></p>
				</div>
				<div class="row">
					<p><?php echo $peli['genero']; ?></p>
				</div>
				<div class="row">
					<p><?php echo $peli['duracion']; ?></p>
				</div>
				<div class="row">
					<p><?php echo $peli['storyline']; ?></p>
				</div>
				<div class="row">
					<p><?php echo $peli['director']; ?></p>
				</div>
				<div class="row">
					<h2>-----------------------</h2>
				</div>
			
	<?php	} ?>
	</div>
</div>

<script type="text/javascript" src="/queveo/bootstrap/js/cargarJson.js"></script>
