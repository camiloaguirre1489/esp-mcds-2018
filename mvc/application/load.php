<?php 
class Load{
	public function view($nombre_vista, $datos = null){
		if (is_array($datos)) {
			extract($datos);
		}
		include 'views/' . $nombre_vista;
	}
}


 ?>