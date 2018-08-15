<?php 

class Animal{
	
	public $nombre;
	private $edad;
	protected $peso;

	public function __construct($nombre, $edad, $peso){
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->peso = $peso;
	}

	public function getEdad(){
		return $this->edad;
	}
	
}

$gato = new Animal("Firulais", 20, 5);
echo "\n Nombre: ".$gato->nombre;
echo "\n Edad: ".$gato->getEdad();
echo "\n Peso: ".$gato->peso;



 ?>