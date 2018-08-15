<?php 
class pokemon{

	public $nombre;
	public $tipo;
	public $salud;

	public function __construct($nombre, $tipo, $salud){
		$this->nombre = $nombre;
		$this->tipo = $tipo;
		$this->salud = $salud;
	}

	public function atacar(){}
	public function esquivar(){}
	public function evolucionar(){}
}

$poke1 = new pokemon("PIKACHU", "Electrico", 100);
echo "\n Nombre: ".$poke1->nombre;
echo "\n Tipo: ".$poke1->tipo;
echo "\n Salud: ".$poke1->salud;
echo "\n\n";


class pokemon2{

	public $nombre2;
	public $tipo2;
	private $salud2;

	public function __construct($nombre2, $tipo2, $salud2){
		$this->nombre2 = $nombre2;
		$this->tipo2 = $tipo2;
		$this->salud2 = $salud2;
	}

	public function getSalud(){
		return $this->salud2;
	}
	public function atacar(){
		echo ("\n El pokemon ataca si su amo lo dice...");
	}
	public function esquivar(){
		echo ("\n El pokemon esquiva con tiro de agua...");
	}
	public function evolucionar(){
		echo ("\n Este pokemon evoluciona a IVYSAUR...");
	}

}
$poke2 = new pokemon2("BULVASAUR", "Planta veneno", 86);
echo "\n Nombre: ".$poke2->nombre2;
echo "\n Tipo: ".$poke2->tipo2;
echo "\n Salud: ".$poke2->getSalud();
echo "\n Actualidad".$poke2->esquivar();
echo "\n Proximo".$poke2->evolucionar();
echo "\n\n";



class pokemon3{

	private $nombre3;
	private $tipo3;
	private $salud3;

	public function __construct($nombre3, $tipo3, $salud3){
		$this->nombre3 = $nombre3;
		$this->tipo3 = $tipo3;
		$this->salud3 = $salud3;
	}

	public function getNombre(){
		return $this->nombre3;
	}
	public function getTipo(){
		return $this->tipo3;
	}
	public function getSalud(){
		return $this->salud3;
	}

	public function atacar(){
		echo ("\n El pokemon ataca con bola de fuego...");
	}
	public function esquivar(){
		echo ("\n El pokemon esquiva con su cola...");
	}
	public function evolucionar(){
		echo ("\n Este pokemon evoluciona a CHARMILION...");
	}

}
$poke3 = new pokemon3("CHARMANDER", "Fuego", 77);
echo "\n Nombre: ".$poke3->getNombre();
echo "\n Tipo: ".$poke3->getTipo();
echo "\n Salud: ".$poke3->getSalud();
echo "\n Actualidad".$poke3->atacar();
echo "\n\n";

 ?>