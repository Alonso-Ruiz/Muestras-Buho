<?php
class Reclamos extends Controlador
{
	
	function __construct()
	{

	}

	function mostrarVista()
	{
		$nombre = "reclamos";
		$fileName = "views/" . $nombre . "/index.php";
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}

?>