<?php 

class Operacion{

	protected $num1;
	protected $num2;

	public function __construct($num1, $num2){
		$this->num1 = $num1;
		$this->num2 = $num2;
	}
}

class Suma extends Operacion{
	public function getResultado(){
		return $this->num1 + $this->num2;
	}
}

class Resta extends Operacion{
	public function getResultado(){
		return $this->num1 - $this->num2;
	}
}

class Multiplicacion extends Operacion{
	public function getResultado(){
		return $this->num1 * $this->num2;
	}
}

class Division extends Operacion{
	public function getResultado(){
		return $this->num1 / $this->num2;
	}
}

$oper1 = new Suma(18, 15);
echo "\n \n La Suma es: ".$oper1->getResultado();

$oper2 = new Resta(25, 12);
echo "\n \n La Resta es: ".$oper2->getResultado();

$oper3 = new Multiplicacion(3, 24);
echo "\n \n La Multiplicacion es: ".$oper3->getResultado();

$oper4 = new Division(60, 4);
echo "\n \n La Division es: ".$oper4->getResultado();



?>

