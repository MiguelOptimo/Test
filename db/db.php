<?php
/**
* 
*/
class Conectar
{
	public static function conexion()
	{
		$conexion = new mysqli("localhost","root","","mvc");
		$conexion->query("SET NAME 'utf8'");
		return $conexion;
	}
}
?>