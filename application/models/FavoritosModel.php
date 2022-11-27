<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FavoritosModel extends CI_Model
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
  public function ExecuteArrayResults( $sql, $params)
  {
    $query = $this->db->query( $sql, $params);
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

  public function insert($id, $email){
    $sql = 'INSERT INTO favoritos (peli_id, usuarios_correo) VALUES (?,?)';
	 	$result = $this->db->query($sql, array($id, $email));
   	return $result;
  }

  public function update( $tabla, $datos, $where){
    $this->db->update( $tabla, $datos, $where);
  }

  public function delete( $tabla, $where){
    $this->db->delete( $tabla, $where);
  }

	public function esFavorita($peli_id){
		//$sql = "select * from posts where id = " . $post_id;
    $sql = "select * from favoritos where peli_id = ?";
    return ( $this->ExecuteArrayResults( $sql, $peli_id));
  }

	public function getFavoritasByUser($email){
		//$sql = "select * from posts where id = " . $post_id;
    $sql = "select  p.id, titulo, fecha, genero, duracion, poster, d.nombre as director, a.nombre as reparto
						from proyecto.peliculas p
						inner join proyecto.directores d on d.id = p.director_id
						inner join proyecto.reparto r on r.peli_id = p.id
						inner join proyecto.actores a on a.id=r.actores_id
						inner join proyecto.favoritos f on f.peli_id=p.id
						where f.usuarios_correo= ?
						group by p.id";
    return ( $this->ExecuteArrayResults( $sql, $email));
  }






}
