<?php

class Login extends Controlador
{
	
	function __construct()
	{

	}

	function mostrarVista()
	{
		$nombre = "login";
		$fileName = "views/" . $nombre . "/index.php";
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}

?>