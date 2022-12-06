<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class CrudController extends CI_Controller {

function __construct(){
    parent::__construct();
    $this->load->model( 'ActoresModel', 'ActoresModel');
    $this->load->model( 'DirectoresModel', 'DirectoresModel');
    $this->load->model( 'FavoritosModel', 'FavoritosModel');
    $this->load->model( 'PeliculasModel', 'PeliculasModel');
    $this->load->model( 'RepartoModel', 'RepartoModel');
    $this->load->model( 'UsuariosModel', 'UsuariosModel');
}



public function index()
{
                
}
        

public function cargarJson(){
	$result = file_get_contents("pelis.json");
	$pelis = json_decode($result, true);

	foreach ($pelis as $peli) {
		
		$this->DirectoresModel->insert($peli['director']);
		$idDirector = $this->DirectoresModel->getDirectorId($peli['director']);
		$this->PeliculasModel->insert($peli['titulo'], $peli['fecha'], $peli['genero'], $peli['duracion'], $peli['posterurl'], $idDirector[0]['id'], $peli['storyline']);
		$idPelicula = $this->PeliculasModel->getPeliculaId($peli['titulo']);
		foreach ($peli['reparto'] as $actor) { 
			$this->ActoresModel->insert($actor);
			$idActor = $this->ActoresModel->getActorId($actor);
			$this->RepartoModel->insert($idPelicula, $idActor[0]['id']);
		}

	}
	header ( "location: /queveo/admin/json");

}

public function addPeliNueva()
{
	$existPeli = $this->PeliculasModel->getPeliByTitulo($_POST['titulo']);	//Comprobamos si la película ya está en la base de datos
	$actores = explode(",", $_POST['reparto']);
	if(array_key_exists(0, $existPeli['data'])){		//Si la película ya existe
	// if($existPeli['data'][0]['id']){
		$resultado = array ( 
			'result' => "Película ya existe en la base de datos"  
		  );
	}else {			// Si la película no existe
		$idDirector = $this->DirectoresModel->getDirectorId($_POST['director']); 
		if(!$idDirector){		//Si el director no existe lo insertamos
			$this->DirectoresModel->insert($_POST['director']);
			$idDirector = $this->DirectoresModel->getDirectorId($_POST['director']);
		}
		$this->PeliculasModel->insert($_POST['titulo'], $_POST['fecha'], $_POST['genero'], $_POST['duracion'], $_POST['poster'], $idDirector[0]['id'], $_POST['sinopsis']);
		$idPeli = $this->PeliculasModel->getPeliculaId($_POST['titulo']);
		
		foreach ($actores as $actor){
			$idActor = $this->ActoresModel->getActorId($actor); 
			if(!$idActor){		//Si el actor no existe lo insertamos
				$this->ActoresModel->insert($actor);
				$idActor = $this->ActoresModel->getActorId($actor);
			}
			$this->RepartoModel->insert($idPeli, $idActor[0]['id']);
		}
		

		$resultado = array ( 
			'result' => "Película insertada en la base de datos"  
		  );
	}

	$vista=array(  //Volvemos a cargar la vista mándalo el mensaje de error
		'vista'=>'admin/insertada.php',  //nombre de la vista
		'params'=>$resultado,      // datos que le pasamos
		'layout'=>'ly_admin.php', // nombre del layout
		'titulo'=>'Fallo login' //título layout
	);

	$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  


}









}
        
    /* End of file  CrudController.php */
        
                            