<?php 
interface Animal{
public function comer();
public function correr();
}
//Clase Perro
class Perro implements Animal {
	private $nombre;

	public function __construct($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function ladrar() {
		return "Ladro...";
	}

	public function comer() {
		return "Comio...";
	}

	public function correr() {
		return "Corrio...";
	}
}
//Clase Gato
	class Gato implements Animal {
	private $nombre;

	public function __construct($nombre){
		$this->nombre = $nombre;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function maullar() {
		return "Maullo...";
	}

	public function comer() {
		return "Comio...";
	}

	public function correr() {
		return "Corrio...";
	}
}

$perro1 = new Perro('Firulais');
echo "\n".$perro1->getNombre();
echo "\n".$perro1->correr();
echo "\n".$perro1->comer();
echo "\n".$perro1->ladrar();

$gato1 = new Gato('Felix');
echo "\n\n".$gato1->getNombre();
echo "\n".$gato1->correr();
echo "\n".$gato1->comer();
echo "\n".$gato1->maullar();
 ?>