<?php
class usuarios extends Controlador
{
	
	function __construct()
	{

	}

	function mostrarVista()
	{
		$nombre = "usuarios";
		$fileName = "views/" . $nombre . "/index.php";
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}

?>