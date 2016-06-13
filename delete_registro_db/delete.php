<?php 
include("conexion.php");

$con = mysqli_connect($host, $user, $pw) or die ("problemas en server");
mysqli_select_db($con,$db)or die("Problemas con db");

$reg= mysqli_query($con,"SELECT id FROM t_ejemplo WHERE nombre= '$_POST[nombre]'");

if ($re=mysqli_fetch_array($reg, MYSQLI_ASSOC)) {
	mysqli_query($con,"DELETE FROM t_ejemplo WHERE nombre= '$_POST[nombre]'");
		echo "Datos eliminados";
}else
echo "datos no eliminados";