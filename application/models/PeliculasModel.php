<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PeliculasModel extends CI_Model
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




  public function insert($titulo, $fecha, $genero, $duracion, $poster, $director_id){
		$sql = 'INSERT INTO peliculas (titulo, fecha, genero, duracion, poster, director_id) VALUES (?,?,?,?,?,?)';
	 	$result = $this->db->query($sql, array($titulo, $fecha, $genero, $duracion, $poster, $director_id));
   return $result;
  }

  public function update( $tabla, $datos, $where){
    $this->db->update( $tabla, $datos, $where);
  }

  public function delete( $tabla, $where){
    $this->db->delete( $tabla, $where);
  }

  public function getPeliculaId($nombre){
    $sql = "select id from peliculas where titulo = ?";
		$id=$this->ExecuteResultsParamsArray( $sql, $nombre );
    return $id['data'][0]['id'];
  }



  public function recomendadas(){
    $sql = "select p.id, titulo, fecha, genero, duracion, poster, d.nombre as director, a.nombre as reparto
						from proyecto.peliculas p
						inner join proyecto.directores d on d.id = p.director_id
						inner join proyecto.reparto r on r.peli_id = p.id
						inner join proyecto.actores a on a.id=r.actores_id
						group by p.id";
    return ( $this->ExecuteArrayResults( $sql ));
  }

	public function getPeli( $id){
		//$sql = "select * from posts where id = " . $post_id;
    $sql = "select  p.id, titulo, fecha, genero, duracion, poster, d.nombre as director, a.nombre as reparto
						from proyecto.peliculas p
						inner join proyecto.directores d on d.id = p.director_id
						inner join proyecto.reparto r on r.peli_id = p.id
						inner join proyecto.actores a on a.id=r.actores_id
						where p.id= ?
						group by p.id";
    $params = array( $id);
    return ( $this->ExecuteResultsParamsArray( $sql, $params));
  }

	




}
