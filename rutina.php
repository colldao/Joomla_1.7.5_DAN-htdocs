<?php
function retornarConexion()
{
$conexion=mysql_connect("localhost","root","colldao") or
	die("Problemas en la conexi�n.");
mysql_select_db("INTEGRITY",$conexion) or
	die("Problemas en la selecci�n de la base de datos");
return $conexion;
}
?>

