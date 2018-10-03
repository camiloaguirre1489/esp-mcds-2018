<?php 
 
 class Model extends DataBase {
 
 	public function __construct() {
 		parent::__construct('localhost', 'root', '', 'mcds-1747586');
 		parent::connection();
 		//parent::disconnection();
 	}
 
 	public function getAllUsers() {
 		try {
 			$sql = "SELECT * FROM users";
 			$stm = $this->conx->prepare($sql);
 			$stm->execute();
 			return $stm->fetchAll();
 
 		} catch (PDOException $e) {
 			echo $e->getMessage();
 		}
 
 	}
 
 	public function addUser($firstName, $lastName, $email, $phoneNumber, $address) {
 		try {
 			$sql = "INSERT INTO users (id, firstName, lastName, email, phoneNumber, address) 
 			        VALUES (DEFAULT, :firstName, :lastName, :email, :phoneNumber, :address)";
 			$stm = $this->conx->prepare($sql);
 			$stm->bindparam(":firstName", $firstName);
 			$stm->bindparam(":lastName", $lastName);
 			$stm->bindparam(":email", $email);
 			$stm->bindparam(":phoneNumber", $phoneNumber);
 			$stm->bindparam(":address", $address);
 			if($stm->execute()) {
 				return true;
 			} else {
 				return false;
 			}
 		} catch (PDOException $e) {
 			echo $e->getMessage();
 		} 
 	}
 
 	public function getUser($id)
 	{
 		try {
 			$sql = "SELECT * FROM users WHERE id = :id";
 			$stm = $this->conx->prepare($sql);
 			$stm->bindparam(":id", $id);
 			$stm->execute();
 			return $stm->fetchAll();
 
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
 	public function editUser($id, $firstName, $lastName, $email, $phoneNumber, $address) {
		try {
			$sql = "UPDATE users SET firstName = :firstName, lastName = :lastName, email = :email, phoneNumber = :phoneNumber, address = :address WHERE id = :id";
			$stm = $this->conx->prepare($sql);
			$stm->bindparam(":id", $id);
			$stm->bindparam(":firstName", $firstName);
			$stm->bindparam(":lastName", $lastName);
			$stm->bindparam(":email", $email);
			$stm->bindparam(":phoneNumber", $phoneNumber);
			$stm->bindparam(":address", $address);
			if($stm->execute()) {
				return true;
			} else {
				return false;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 
	}
 	public function deleteUser($id)
	{
		try {
			$sql = "DELETE FROM users WHERE id = :id";
			$stm = $this->conx->prepare($sql);
			$stm->bindparam(":id", $id);
			$stm->execute();
			return $stm->fetchAll();
 		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
 	public function getInfo() {
 		return array(
 			'firstName'   => 'Jeremias',
 			'lastName'    => 'Springfield',
 			'email'       => 'jeremias@gmail.com',
 			'phoneNumber' => 3120909900
 		);
 	}
 
 } 
 
 
 ?>