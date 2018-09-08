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
		//$datos = $this->model->getInfo();
		$datos = $this->model->getAllUsers();
		$this->load->view('home.php', $datos);
	}
}

?>