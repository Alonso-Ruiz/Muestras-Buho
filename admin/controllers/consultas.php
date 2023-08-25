<?php
class Consultas extends Controlador
{
	
	function __construct()
	{

	}

	function mostrarVista()
	{
		$nombre = "consultas";
		$fileName = "views/" . $nombre . "/index.php";
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}

?>