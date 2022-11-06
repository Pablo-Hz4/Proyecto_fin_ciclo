<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class NuevoUsuarioController extends CI_Controller {

	function __construct(){				// Creamos la conexión al modelo
		parent::__construct();
		$this->load->model( 'UsuariosModel', 'UsuariosModel');
	  }


public function index()
{
	$datos=array();
	$vista=array(
		'vista'=>'inicio/nuevo_usuario.php',  //nombre de la vista
		'params'=>$datos,      // datos que le pasamos
		'layout'=>'ly_nuevo_usuario.php', // nombre del layout
		'titulo'=>'Prueba de controlador' //título layout
	);

	$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  
}
        

public function add_usuario(){
	foreach ( $_POST as $key => $value){
      $datos[$key] = $value;
    }

	$this->UsuariosModel->insert('usuarios', $datos);
	
	
	
}




























}
        
    /* End of file  NuevoUsuarioController.php */
        
                            