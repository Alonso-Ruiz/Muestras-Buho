<?php
require_once("models/ModeloCategoria.php");

class Producto extends Controlador {



    public function __construct() {
		
		parent::__construct();
        $this->model = new ModeloCategoria();
        //Invocar al metodo MostrarVista
		//$this->mostrarVista("main/index");
        
    }
    function mostrarVista()

	{
        $slug = $_GET['slug'];

		
        $producto = $this->model->getProductoBySlug($slug);

		$nombre = "productos/producto";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");  

		

	}

	
	
	
   
    
   
}
