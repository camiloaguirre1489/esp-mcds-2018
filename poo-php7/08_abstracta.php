<?php 

abstract class Fruta{
	protected $nombre;
	protected $color;
	protected $precio;

	public function __construct($n, $c, $p){
		$this->nombre = $n;
		$this->color = $c;
		$this->precio = $p;
	}

	abstract public function getInfo();//Ningun metodo abstracto debe tener cuerpo o implementacion dentro por eso termina en ;
}

class Manzana extends Fruta {
	public function getInfo(){// como la clase padre es abstracta las clases hijas tienen que implementar el codigo
		return "Nombre: ".$this->nombre."\nColor: ".$this->color."\nPrecio: ".$this->precio;
	}
}

class Guayaba extends Fruta {
	public function getInfo(){
		return "\n\n\nNombre: ".$this->nombre."\nColor: ".$this->color."\nPrecio: ".$this->precio;
	}
}

// $fruta1 = new Fruta; // Error: Las clases abstractas no se pueden instanciar
$fruta1 = new Manzana('Manzana-Royal', 'Roja', 1200);
echo $fruta1->getInfo();

$fruta2 = new Guayaba('Guayaba-Araza', 'Amarilla', 3800);
echo $fruta2->getInfo();

?>