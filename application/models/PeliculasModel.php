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




  public function insert($titulo, $fecha, $genero, $duracion, $poster, $director_id, $sinopsis){
		$sql = 'INSERT INTO peliculas (titulo, fecha, genero, duracion, poster, director_id, sinopsis) VALUES (?,?,?,?,?,?,?)';
	 	$result = $this->db->query($sql, array($titulo, $fecha, $genero, $duracion, $poster, $director_id, $sinopsis));
   return $result;
  }


  public function getPeliculaId($nombre){
    $sql = "select id from peliculas where titulo = ?";
		$id=$this->ExecuteResultsParamsArray( $sql, $nombre );
    return $id['data'][0]['id'];
  }



  public function recomendadas(){
    $sql = "select id, titulo, poster
						from proyecto.peliculas LIMIT 0,8";
    return ( $this->ExecuteArrayResults( $sql ));
  }

	public function getPeli( $id){
    $sql = "select p.id, titulo, fecha, genero, duracion, poster, sinopsis, d.nombre as director, GROUP_CONCAT(DISTINCT a.nombre SEPARATOR ', ') as reparto
						from proyecto.peliculas p
						inner join proyecto.directores d on d.id = p.director_id
						inner join proyecto.reparto r on r.peli_id = p.id
						inner join proyecto.actores a on a.id=r.actores_id
						where p.id= ?
						group by p.id";
    $params = array( $id);
    return ( $this->ExecuteResultsParamsArray( $sql, $params));
  }

	public function getPeliByTitulo( $titulo){
		//$sql = "select * from posts where id = " . $post_id;
    $sql = "select p.id, titulo, fecha, genero, duracion, poster, sinopsis, d.nombre as director, GROUP_CONCAT(DISTINCT a.nombre SEPARATOR ', ') as reparto
						from proyecto.peliculas p
						inner join proyecto.directores d on d.id = p.director_id
						inner join proyecto.reparto r on r.peli_id = p.id
						inner join proyecto.actores a on a.id=r.actores_id
						where p.titulo= ?
						group by p.id";
    $params = array( $titulo);
    return ( $this->ExecuteResultsParamsArray( $sql, $params));
  }

	




}
