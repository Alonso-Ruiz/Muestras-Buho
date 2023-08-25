<?php
class Blog extends Controlador
{
	
	function __construct()
	{

	}

	function mostrarVista()
	{
		$nombre = "blog";
		$fileName = "views/" . $nombre . "/index.php";
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}

?>