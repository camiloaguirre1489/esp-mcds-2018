<?php 

class Autor{
	private $nombre;
	private $email;

	public function __construct ($nombre, $email){
		$this->nombre = $nombre;
		$this->email = $email;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getEmail(){
		return $this->email;
	}
}

class Libro{
	private $nombre;
	private $precio;
	private $autor;

	public function __construct($nombre, $precio, $autor){
		$this->nombre = $nombre;
		$this->precio = $precio;
		$this->autor = $autor;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function getAutor(){
		return $this->autor;
	}

}

$autor = new Autor("Dawn Brown", "dbrown@gmail.com");
$libro = new Libro("Codigo Da Vinci", 25, $autor);
echo "\n========================================="."\n";
echo "\nNombre Libro: ".$libro->getNombre()."\n";
echo "\nPrecio Libro: $".$libro->getPrecio()."\n";
echo "\nAutor Libro: ".$libro->getAutor()->getNombre()."\n";
echo "\nEmail Autor: ".$libro->getAutor()->getEmail()."\n";
echo "\n========================================="."\n";


?>