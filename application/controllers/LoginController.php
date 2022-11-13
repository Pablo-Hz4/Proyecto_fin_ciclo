<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class LoginController extends CI_Controller {

	function __construct(){				// Creamos la conexión al modelo
		parent::__construct();
		$this->load->model( 'UsuariosModel', 'UsuariosModel');
	  }
	
public function index(){
	$datos=array();
	$vista=array(
		'vista'=>'login/login.php',  //nombre de la vista
		'params'=>$datos,      // datos que le pasamos
		'layout'=>'ly_nuevo_usuario.php', // nombre del layout
		'titulo'=>'Prueba de controlador' //título layout
	);

	$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  
            
}
        
public function registro()
  {
    # Tratamos los datos para pasarselos al modelo
    $datos['email'] = $_POST['email'];
   
    $datos['pass'] = ( $_POST['pass']);

    # Enviamos los datos al modelo que hará la consulta  a la base de datos y nos devolvera un array con los datos del usuario o un array vacio si no encuentra nada.
     $user = $this->UsuariosModel->login( $datos);  // Guardamos en la variable $user lo que devuelve la consulta del modelo. Si el email o la contraseña es incorrecta devuelve un array vacío, si es correcta devuelve los datos de la tabla 

	if(empty($user)){							// Si el array está vació quiere decir que el usuario o la contraseña son incorrectos 
		//header("location: /queveo/login");
		$error = array ( 
			'error' => "Usuario o contraseña incorrectos"  
		  );
		$vista=array(  //Volvemos a cargar la vista mándalo el mensaje de error
			'vista'=>'login/login.php',  //nombre de la vista
			'params'=>$error,      // datos que le pasamos
			'layout'=>'ly_nuevo_usuario.php', // nombre del layout
			'titulo'=>'Fallo login' //título layout
		);
	
		$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  
	
	
	
	}  
	elseif($user[0]["rol"]==2) {header("location: /queveo/usuario");} // si el usuario y contraseña son correctos, y el rol es 2 nos envía a la ruta "usuario"
	else{header("location: /queveo/admin");} 
  }













}
        
    /* End of file  LoginController.php */
        
                            