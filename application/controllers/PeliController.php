<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class PeliController extends CI_Controller {


	function __construct()
  {
    parent::__construct();
	$this->load->model( 'DirectoresModel', 'DirectoresModel');
    $this->load->model( 'PeliculasModel', 'PeliculasModel');
    $this->load->model( 'FavoritosModel', 'FavoritosModel');
  }

public function index()
{
	$contenido = $this->PeliculasModel->getPeli($this->uri->segment(2));
	

	if(array_key_exists('rol', $_SESSION)){
		$esFavorita = $this->FavoritosModel->esFavorita($this->uri->segment(2));
		if($esFavorita){
			$contenido['data'][0]['fav']= true;
		}else{
			$contenido['data'][0]['fav']= false;
		}
		
		$layout='ly_usuario.php';
	}else{$layout='ly_inicio.php';}
	
	
	$vista=array(
		'vista'=>'pelis/pelis.php',  //nombre de la vista
		'params'=>$contenido,      // datos que le pasamos
		'layout'=>$layout, // nombre del layout
		'titulo'=>'Prueba de controlador' //título layout
	);

	$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  
}

public function anadirFav(){
	$id=$_POST['id'];
	$email = $_SESSION['email'];
	$this->FavoritosModel->insert($id, $email);

}


        
}
        
    /* End of file  PeliController.php */
        
                            