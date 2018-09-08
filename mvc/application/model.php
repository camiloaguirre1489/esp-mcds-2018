<?php 
class Model extends DataBase {

	public function __construct(){
		parent::__construct('localhost', 'root', '', 'mcds-1747586');
		parent::connection();
		//parent::disconnection();

	}

	public function getInfo(){
		return array(
			'firstName'=>'Jeremias',
			'lastName' => 'Sprinfield',
			'email' => 'jeremias@gmail.com',
			'phoneNumber' => 3120909900

		);
	}
}

?>
