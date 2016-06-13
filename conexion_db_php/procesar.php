<?php 
include("conexion.php");
//Comprueba que los datos se enviaron correctamente
if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['pw']) && !empty($_POST['pw'])) {
	
	//Guarda la conexion de la variable $con
	$con=mysqli_connect($host,$user,$pw)or die("Problemas al conectar");

	//selecciona la base de datos
	mysqli_select_db($con,$db)or die("Problemas al conectar la bd");

//inserta los valores recibidos en la base de datos
	mysqli_query($con,"INSERT INTO t_ejemplo (nombre,pw) VALUES ('$_POST[nombre]','$_POST[pw]')");
	echo "datos insertados";
}else{
	echo "Problemas al insertar datos";
}

 ?>