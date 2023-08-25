<?php
class AtendidoConsultas extends Controlador
{
	
	function __construct()
	{

	}

	function mostrarVista()
	{
		$nombre = "consultas";
		$fileName = "views/" . $nombre . "/atendidoConsultas.php";
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}

?>