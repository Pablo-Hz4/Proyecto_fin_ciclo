<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DirectoresModel extends CI_Model
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
  public function Execute( $sql, $params)
  {
   $data= $this->db->query( $sql, $params);
	 return $data;
  }




  public function insert($datos){
	 $sql = 'INSERT INTO directores (nombre) VALUES (?)';
	 $result = $this->db->query($sql, array($datos));
   return $result;
  }

  public function update( $tabla, $datos, $where){
    $this->db->update( $tabla, $datos, $where);
  }

  public function delete( $tabla, $where){
    $this->db->delete( $tabla, $where);
  }

  public function getDirectorId($nombre){
    $sql = "select id from directores where nombre = ?";
		$id=$this->ExecuteResultsParamsArray( $sql, $nombre );
    return $id['data'][0]['id'];
  }


	public function ListAuthors(){
    $sql = "select * from authors order by display_name asc";
    return ( $this->ExecuteArrayResults( $sql ));
  }



	public function ListOnePost( $post_id){
		
		//$sql = "select * from posts where id = " . $post_id;
    $sql = "select * from posts where id = ?";
    $params = array( $post_id);
    return ( $this->ExecuteResultsParamsArray( $sql, $params));
  }

	public function ListOneAuthor( $author_id)
  {
    //$sql = "select * from posts where id = " . $post_id;
    $sql = "select * from authors where id = ?";
    $params = array( $author_id);
    return ( $this->ExecuteResultsParamsArray( $sql, $params ));
  }





}
