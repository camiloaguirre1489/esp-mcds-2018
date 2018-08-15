<?php 

# Clase: Un conjunto de Atributos y Métodos
class Animal{
	#Atributos: Propiedades del Objeto
	public $name;
	public $edad;
	public $peso;

	#Métodos: Funcionalidad del objeto, que hace ese objeto
	public function correr(){
		echo "\n Esta corriendo...";
	}
	public function comer(){
		echo "\n Esta comiendo...";
	}
	public function dormir(){
		echo "\n Esta durmiento...";
	}
}
#Instanciando el objeto Animal - para que pueda  correrlo y mostrar algo
$an1 = new Animal;
$an1->correr();
$an1->comer();
$an1->dormir();


 ?>