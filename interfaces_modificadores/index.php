<?php 
	interface Auto{
		function encender();
		function apagar();
	}

	interface Gasolina extends Auto{
		function vaciarTanque();
		function llenarTanque($cant);
	}

	class Deportivo implements gasolina{

		private $estado = false;
		private $tanque = 0;

		public function estado(){
			if ($this->estado) {
				print "El auto esta encendido y tiene" . $this->tanque . "de litros" ;
			}else
				print "El auto esta apagado";
		}
		function encender(){
			if ($this->estado) {
				print "EL auto ya estaba encendido";
			}else
				if ($this->tanque <= 0) {
					print "LLenar tanque esta vacio";
				}else{
					$this->estado = true;
				print "El auto se encendio";
				}
				

		}
		function apagar(){
			if ($this->estado) {
				print "EL auto se apago";
				$this->estado = false;
			}else
				
				print "El auto ya estaba apagado";
		}
		function vaciarTanque(){
			$this->tanque = 0;
		}
		function llenarTanque($cant){
			$this->tanque = $cant;
		}
		function usar($km){
			if ($this->estado) {
				$reducir = $km / 3;
				$this->tanque = $this->tanque - $reducir;
				if ($this->tanque <= 0) {
					$this->estado = false;
					print "El tanque de gasolina se agoto";
				}
				
			}else
				print "EL auto se apago y no s epuede usar";
				
		}

	}

	$obj = new Deportivo();
	$obj->encender();
	$obj->llenarTanque(100);
	$obj->encender();	
	$obj->usar(60);	
	$obj->estado();	
 ?>