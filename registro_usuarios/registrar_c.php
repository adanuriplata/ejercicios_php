<?php
include("conexion.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre']) && 
	isset($_POST['user']) && !empty($_POST['user']) &&
	isset($_POST['pw']) && !empty($_POST['pw']) &&
	isset($_POST['pw2']) && !empty($_POST['pw2']) &&
	isset($_POST['email']) && !empty($_POST['email']) &&
	$_POST['pw'] == $_POST['pw2'])
{
	$con=mysqli_connect($host,$user,$pw)or die("Problemas al conectar");

	mysqli_select_db($con,$db)or die("Problemas al conectar la bd");

	mysqli_query($con,"INSERT INTO registros (nombre,user,pw,email) VALUES ('$_POST[nombre]','$_POST[user]','$_POST[pw]','$_POST[pw2]','$_POST[email]')");
	//mysqli_query($con,"INSERT INTO t_ejemplo (nombre,pw)            VALUES ('$_POST[nombre]','$_POST[pw]')");
	echo "datos insertados";
	

}else{
	echo "verifica que llenaste los campos y los password coinciden";
}
 ?>
