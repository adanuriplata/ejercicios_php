<?php 
	// require_once "api/Models/Persona.php";
	// require_once "api/Controllers/PersonasControllers.php";

//para evitar las lineas de arriba se carga la funcion spl_autoload_register
//se hace la ruta y se remplasa el slash 
	spl_autoload_register(function($class){
		$ruta = "api/" . str_replace("\\", "/", $class) . ".php"; 
		if (is_readable($ruta)) {
			require_once $ruta;
		}else{
			echo "el archivo no existe";
		}
	});
	//se debe de especificar el namespace ene ste caso Models
	Models\Persona::Hola();
	Controllers\PersonasControllers::Hola();
 ?>