<?php 
class Controller{
	public $load;
	public $model;
	public function __construct(){
		$this->load = new Load;
		$this->model = new Model;
		$this->home();
	}

	public function home(){
		$datos = $this->model->getInfo();
		$this->load->view('home.php', $datos);
	}
}

?>