<?php 

$n = 5;
$num1 = 0;
$num2 = 1;


for ($i=0; $i <= $n; $i++) { 
	echo " \n - ".$num1;
	$aux = $num2;
	$num2 = $num2 + $num1;
	$num1 = $aux;
	
}
?>