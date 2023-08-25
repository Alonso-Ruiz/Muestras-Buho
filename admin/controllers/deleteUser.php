<?php
class deleteUser extends Controlador
{
	
	function __construct()
	{

	}

	function mostrarVista()
	{
		$nombre = "usuarios";
		$fileName = "views/" . $nombre . "/deleteUser.php";
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}

?>