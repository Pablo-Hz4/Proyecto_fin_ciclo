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
	
	if(empty($contenido)){							
		$error = array ( 
			'error' => "Película no encontrada"  
		  );
		$vista=array(  //Volvemos a cargar la vista mándalo el mensaje de error
			'vista'=>'pelis/pelis.php',  //nombre de la vista
			'params'=>$error,      // datos que le pasamos
			'layout'=>'ly_nuevo_usuario.php', // nombre del layout
			'titulo'=>'Fallo login' //título layout
		);
	
		$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  
	}  






	if(array_key_exists('rol', $_SESSION)){
		$esFavorita = $this->FavoritosModel->esFavorita($this->uri->segment(2), $_SESSION['email']);
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

public function getPeliByTitutlo(){
	
	if(array_key_exists('rol', $_SESSION)){
		$layout='ly_usuario.php';
	}else{$layout='ly_inicio.php';}

	

    	$titulo = $_POST['titulo'];
		$contenido = $this->PeliculasModel->getPeliByTitulo($titulo);

		if(empty($contenido['data'])){							// Si el array está vació quiere decir que la película no existe 
			$contenido = array ( 
				'error' => "Película no encontrada"  
			  );

			  $vista=array(
				'vista'=>'pelis/pelis.php',  //nombre de la vista
				'params'=>$contenido,      // datos que le pasamos
				'layout'=>$layout, // nombre del layout
				'titulo'=>'Prueba de controlador' //título layout
			);
		
			$this->layouts->view($vista);  // vamos al archivos layouts.php (lo hemos cargado en el autoload) y ejecutamos la función view, a la que le pasaos la variable $vista  
			
			
		}else {											//si la película si que existe
			if(array_key_exists('rol', $_SESSION)){
				$esFavorita = $this->FavoritosModel->esFavorita($this->uri->segment(2), $_SESSION['email']);
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

		

	} 



        
}
        
    /* End of file  PeliController.php */
        
                            