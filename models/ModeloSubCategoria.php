<?php

require_once 'ModeloBase.php';


class ModeloSubCategoria extends ModeloBase {
  
	public function __construct() {
		parent::__construct();
	}


  public function getSubProducto($id) {
    $sql = "SELECT * FROM subproductos WHERE id = ?";
    $stmt = $this->db->prepare($sql);
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $resultSet = $stmt->get_result();
    $data = $resultSet->fetch_assoc();
    return $data;
  } 
//   public function getSubProductoBySlug($slug) {
//     // consulta para obtener un producto por su slug
//     $query = "SELECT * FROM subproductos WHERE slug ='$slug' LIMIT 1";
//     $result = $this->db->query($query);
//     return $result->fetch_assoc();
// }
  
}
