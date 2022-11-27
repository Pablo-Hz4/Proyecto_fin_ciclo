<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class UserController extends CI_Controller {

	function __construct()
  {
    parent::__construct();

    $this->load->model( 'PeliculasModel', 'PeliculasModel');
    $this->load->model( 'FavoritosModel', 'FavoritosModel');

  }

public function index(){
	$email = $_SESSION['email'];
	$fav = $this->FavoritosModel->getFavoritasByUser($email);
	$datos = array('contenido' => $fav);
	
	
	$vista=array(
		'vista'=>'usuario/favoritas_usuario.php',  //nombre de la vista
		'params'=>$datos,      // datos que le pasamos
		'layout'=>'ly_usuario.php', // nombre del layout
		'titulo'=>'Prueba de controlador' //título layout
	);

	$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  
           
}

public function inicio_usuario(){

	$contenido = $this->PeliculasModel->recomendadas();
	$datos = array('contenido' => $contenido);
	
	$vista=array(
		'vista'=>'inicio/index_inicio.php',  //nombre de la vista
		'params'=>$datos,      // datos que le pasamos
		'layout'=>'ly_usuario.php', // nombre del layout
		'titulo'=>'Prueba de controlador' //título layout
	);

	$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  
           
}

        
}
        
    /* End of file  UserController.php */
        
                            