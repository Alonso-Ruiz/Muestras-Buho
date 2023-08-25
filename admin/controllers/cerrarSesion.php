<?php
class CerrarSesion extends Controlador
{
	
	function __construct()
	{

	}

	function mostrarVista()
	{
		$nombre = "layouts";
		$fileName = "views/" . $nombre . "/cerrarSesion.php";
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}