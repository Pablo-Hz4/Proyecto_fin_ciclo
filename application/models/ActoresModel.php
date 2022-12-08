<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ActoresModel extends CI_Model
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

    return ( $query->result_array());

  }



  # Ejecuta querys sin devolver resultados deletes, inserts o updates
  public function Execute( $sql)
  {
    $this->db->query( $sql);
  }




  public function insert($datos){
		$sql = 'INSERT INTO actores (nombre) VALUES (?)';
	 	$result = $this->db->query($sql, array($datos));
   return $result;
  }


	public function getActorId($nombre){
    $sql = "select id from actores where nombre = ?";
		$id=$this->ExecuteResultsParamsArray( $sql, $nombre );
    return $id;
  }








}
