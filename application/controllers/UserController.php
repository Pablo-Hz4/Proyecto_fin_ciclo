<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class UserController extends CI_Controller {

public function index(){
	$datos=array();
	$vista=array(
		'vista'=>'usuario/index_usuario.php',  //nombre de la vista
		'params'=>$datos,      // datos que le pasamos
		'layout'=>'ly_usuario.php', // nombre del layout
		'titulo'=>'Prueba de controlador' //título layout
	);

	$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  
           
}

public function inicio_usuario(){
	$datos=array();
	$vista=array(
		'vista'=>'usuario/inicio_usuario.php',  //nombre de la vista
		'params'=>$datos,      // datos que le pasamos
		'layout'=>'ly_usuario.php', // nombre del layout
		'titulo'=>'Prueba de controlador' //título layout
	);

	$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  
           
}

        
}
        
    /* End of file  UserController.php */
        
                            