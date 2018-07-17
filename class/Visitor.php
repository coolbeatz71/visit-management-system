<?php

require_once 'Config.php'; 
require_once 'ClassAutoloader.php';

//charging the class autoloader
ClassAutoloader::Register();

class Visitor{

	public $response = array();

	public $userRole = VISITOR;

	public function __construct(){
		$db = new DBQuery();
		$this->db = $db;

		$app = new Common();
		$this->app = $app;
	}

	public function checkVisitorLogin($email, $password){

		if($this->app->isEmailExist($email, $this->userRole)){

			$query = "SELECT * FROM visitor_info WHERE email = ?";

			$row = $this->db->getRow($query, [ $email ]);
			$passwordHash = $row->password;

			return $passwordHash === md5($password) ? true : WRONG_PASSWORD;

		}else{

			return FALSE;
		}
	}

	public function registerVisitor($firstName, $lastName, $email, $phoneNumber, $password, $dateOfBirth, $address){

		if(!$this->app->isEmailExist($email, $this->userRole)){
		
			$query = "INSERT INTO visitor_info (first_name, last_name, email, phone_number, password, date_of_birth, address) 
			VALUES (?,?,?,?,?,?,?)";

			$result = $this->db->insertRow($query, [ 
				$firstName, $lastName, $email, $phoneNumber, md5($password), $dateOfBirth, $address 
			]);

			return true;

		}else{
			return EMAIL_ALREADY_EXISTED;
		}
	}

	public function getVisitorInfo($idVisitor){

		$query = "SELECT * FROM visitor_info WHERE id_visitor = ?";
		$result = $this->db->getRow($query, [ $idVisitor ]);

		return $result;
	}

	public function getVisitorInfoByEmail($email){

		$query = "SELECT * FROM visitor_info WHERE email = ?";
		$result = $this->db->getRow($query, [ $email ]);

		return $result;
	}

	public function getVisitByVisitor($idVisitor){

		$query = "SELECT * FROM visit_info WHERE id_visitor = ?";
		$result = $this->db->getRows($query, [ $idVisitor ]);

		return $result;
	}

	public function getVisitorId(){
		$id = $this->db->getLastInsertId();
		return $id;
	}
} 

?>