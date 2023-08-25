<?php

require_once 'ModeloBase.php';


class ModeloCategoria extends ModeloBase {
  
	public function __construct() {
		parent::__construct();
	}

 
  public function getProductoBySlug($slug) {
    // consulta para obtener un producto por su slug
    $sql = "SELECT * FROM productos WHERE slug = ?";
    $stmt = $this->db->prepare($sql);
    $stmt->bind_param('s', $slug);
    $stmt->execute();
    $resultSet = $stmt->get_result();
    $data = $resultSet->fetch_assoc();
    return $data;
}
  
}
