<?php

class Ingresar extends Controlador
{
	
	function __construct()
	{

	}

	function mostrarVista()
	{
		$nombre = "login";
		$fileName = "views/" . $nombre . "/ingresar.php";
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}

?>