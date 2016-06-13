<?php 
 include("conexion.php");
 $con = mysqli_connect($host,$user,$pw)
 or die("Problemas al conectar server");

 mysqli_select_db($con,$db)
 or die("Problemas al conectar base de datos");

 $registro = mysqli_query($con,"SELECT * FROM t_ejemplo WHERE nombre='$_POST[nombre]'")
 or die("problemas n consulta:".mysqli_error());

 while($reg = mysqli_fetch_array($registro, MYSQLI_ASSOC)){
 	echo $reg['nombre'];
 	echo $reg['pw'];
 }