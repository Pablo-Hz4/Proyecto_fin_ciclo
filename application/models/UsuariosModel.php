<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsuariosModel extends CI_Model
{
  # Variable donde se guarda la conexión a la base de datos
  private $db = null;

  function __construct()
  {

    parent::__construct();
		

    # Cargamos la conexión a la base de datos
    $this->db = $this->load->database('proyecto', true);

  }

  # Ejecuta consultas y devuelte los resultados en un array
  public function ExecuteArrayResults( $sql)
  {
    $query = $this->db->query( $sql);
    $rows = $query->result_array();
    $query->free_result();

    return ( $rows);
  }


	public function ExecuteResultsParamsArray( $sql, $params){
    $query = $this->db->query( $sql, $params);
    $rows['data'] = $query->result_array();
    $query->free_result();

    return ( $rows);

  }



  # Ejecuta querys sin devolver resultados deletes, inserts o updates
  public function Execute( $sql)
  {
    $this->db->query( $sql);
  }




  public function insert($datos){
		$tabla="usuarios";
    $this->db->insert( $tabla, $datos);
  }


  # Método para validar el email y contraseña que nos han pasado desde el formulario
  public function login( $datos){
    $sql = "Select * From usuarios Where email = '".$datos['email']."' And pass = '".$datos['pass']."'";
    return ( $this->ExecuteArrayResults( $sql ));
  }

# Método para validar si ya hay un usuario registrado con ese email
	public function check($datos){
    $sql = "Select * From usuarios Where email = '".$datos['email']."'";
    return ( $this->ExecuteArrayResults( $sql ));
  }


	


}
