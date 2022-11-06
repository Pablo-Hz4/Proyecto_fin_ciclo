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

		//En UsuariosModel creamos la función check. Esta función nos devuelve todos los usuarios con el email introducido.
	if(!$this->UsuariosModel->check($datos)){ //Si no devuelve ninguno es que no hay nadie registrado con ese email
		$this->UsuariosModel->insert($datos);  // Por lo que podemos darlo de alta
		header("location:/queveo/login");  //indicamos a que ruta queremos que nos redireccione.
	}
	else{  //Si por el contrario nos devuelve algún registro es que ya existe un usuario con ese mail, por lo que no es válido para registrarse
		$error = array ( 
			'error' => "Email ya registrado"  
		  );
		$vista=array(  //Volvemos a cargar la vista mándalo el mensaje de error
			'vista'=>'inicio/nuevo_usuario.php',  //nombre de la vista
			'params'=>$error,      // datos que le pasamos
			'layout'=>'ly_nuevo_usuario.php', // nombre del layout
			'titulo'=>'Fallo registro' //título layout
		);
	
		$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  
	
	}

	
}




























}
        
    /* End of file  NuevoUsuarioController.php */
        
                            