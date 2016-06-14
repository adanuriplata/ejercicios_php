<?php 
//declara la clase
	class Persona{
		//atributo
		public $nombre = array();
		public $apellido = array();
		//Metodo
		public function guardar($name, $last_name){
			$this->nombre[] = $name;
			$this->apellido[] = $last_name;
		}

		public function mostrar(){
			for ($i=0; $i < count($this->nombre) ; $i++) { 
				$this->formato($this->nombre[$i], $this->apellido[$i]);
			}
		}

		public function formato($nombre, $apellido){
			echo "Nombre: " . $nombre . " Apellido " . $apellido ."<br>";
		}

	}

	$persona = new Persona();
	$persona->guardar("Carlos", "Fernandez");
	$persona->guardar("Uriel", "Hernandez");
	$persona->mostrar();



 ?>