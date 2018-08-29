<?php 

class Autor{
	private $nombre;
	private $email;

	public function __construct($nombre, $email){
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
	private $autores = array();
	private $nombre;
	private $precio;

	public function __construct($nombre, $precio){
		$this->nombre = $nombre;
		$this->precio = $precio;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function addAutor($nombre, $email){
		$this->autores[] = new Autor($nombre, $email);
	}

	public function getAutores(){
		return $this->autores;
	}


}

$Libro1 = new Libro("Patrones de Diseño GOF", 50);
$Libro1->addAutor("Erich Gamma", "erich@gmail.com");
$Libro1->addAutor("Richard Helm", "richard@gmail.com");
$Libro1->addAutor("John Vlissides", "john@gmail.com");
$Libro1->addAutor("Ralph Johnson", "ralph@gmail.com");

echo "===========================\n";
echo "\nLibro: ".$Libro1-> getNombre();
echo "\nPrecio: ".$Libro1-> getPrecio()."\n";
echo "Autores: \n";
foreach ($Libro1->getAutores() as $autor) { //FOREACH: es un ciclo que recorre el arreglo completo
	echo " - ".$autor->getNombre()."\n";
}

echo "\n\n==========================";


$Libro2 = new Libro("Los Juegos del Hambre", 100);
$Libro2->addAutor("Suzanne Collins", "SuzanneCollins@gmail.com");

echo "===========================\n";
echo "\nLibro: ".$Libro2-> getNombre();
echo "\nPrecio: ".$Libro2-> getPrecio()."\n";
echo "Autor: \n";
foreach ($Libro2->getAutores() as $autor) { //FOREACH: es un ciclo que recorre el arreglo completo
	echo " - ".$autor->getNombre()."\n"; //esta es la forma mas facil de recorrer un arreglo completo utilizando foreach
}

echo "\n\n==========================";

$Libro3 = new Libro("100 años de Soledad", 30);
$Libro3->addAutor("Gabriel Garcia Marquez", "gabrieldifunto@gmail.com");

echo "===========================\n";
echo "\nLibro: ".$Libro3-> getNombre();
echo "\nPrecio: ".$Libro3-> getPrecio()."\n";

$autor = $Libro3->getAutores();
echo "Autor: ".$autor[0]->getNombre()."\n";
echo "\n\n==========================";





 ?>