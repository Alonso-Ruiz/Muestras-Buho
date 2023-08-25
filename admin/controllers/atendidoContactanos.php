<?php
class AtendidoContactanos extends Controlador
{
	
	function __construct()
	{

	}

	function mostrarVista()
	{
		$nombre = "contactanos";
		$fileName = "views/" . $nombre . "/atendidoContactanos.php";
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}

?>