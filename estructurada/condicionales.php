<?php 

$edad   = 26;
$genero = 'M';

if($genero == 'F'){
	echo "No va a la guerra!";
}else{
	if($edad>=18){
		echo "Si va a la guerra!";
	}else{
		echo "No va la guerra!";
	}
}

?>