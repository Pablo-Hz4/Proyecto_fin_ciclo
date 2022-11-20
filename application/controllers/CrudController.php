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
		$this->PeliculasModel->insert($peli['titulo'], $peli['fecha'], $peli['genero'], $peli['duracion'], $peli['posterurl'], $idDirector);
		$idPelicula = $this->PeliculasModel->getPeliculaId($peli['titulo']);
		foreach ($peli['reparto'] as $actor) { 
			$this->ActoresModel->insert($actor);
			$idActor = $this->ActoresModel->getActorId($actor);
			$this->RepartoModel->insert($idPelicula, $idActor);
		}

	}
	header ( "location: /queveo/admin/json");

}











}
        
    /* End of file  CrudController.php */
        
                            