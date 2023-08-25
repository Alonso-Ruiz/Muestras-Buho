<?php
require_once("models/ModeloSubCategoria.php");
class SubProductos extends Controlador {



    public function __construct() {
		
		parent::__construct();
        $this->model = new ModeloSubCategoria();
        //Invocar al metodo MostrarVista
		//$this->mostrarVista("main/index");
        
    }
    function mostrarVista()

	{
		
        $id = $_GET['id'];
		
        $subproductos = $this->model->getSubProducto($id);
		$nombre = "productos/subproductos";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");  

		

	}
	
	
   
    
   
}
