	<?php

	interface forma{
		public function getArea();

	}
	class Circulo implements forma {
		private $radio;
		public function __construct($r) {
			$this->radio = $r;
		}
		public function getArea(){
			return ($this->radio * $this->radio)* pi();
		}

	}

	class Rectangulo implements forma{
		private $altura;
		private $base;
		public function __construct($a, $b){
			$this->altura =$a;
			$this->base =$b;
		}
		public function getArea(){
		return $this->base * $this->altura;
	}

}	

	$cir =new Circulo(8);
	echo "el area del Circulo es:".round($cir->getArea());
	$rec =new Rectangulo(5,4);
	echo "\n\n el area del rectangulo es:".$rec->getArea();

	?>