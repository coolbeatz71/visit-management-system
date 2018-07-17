<?php

//loading required files
require_once 'Config.php'; 
require_once 'ClassAutoloader.php';

//charging the class autoloader
ClassAutoloader::Register();

class Common{

	public function __construct(){
		
		$db = new DBQuery();
		$this->db = $db;
	}

	public function isEmailExist($email, $userRole){

		switch ($userRole) {
			
			case VISITOR:
				
				$query = "SELECT id_visitor FROM visitor_info WHERE email = ?";
				break;
			
			case ADMIN:
				
				$query = "SELECT id_admin FROM admin_info WHERE email = ? ";
				break;
		}

		$row = $this->db->countRow($query, [ $email ]);
		return $row > 0;
	}

	public function isPhoneNumberExist($phoneNumber, $userRole){

		switch ($userRole) {
			
			case VISITOR:
				
				$query = "SELECT id_visitor FROM visitor_info WHERE phone_number = ?";
				break;
			
			case ADMIN:
				
				$query = "SELECT id_admin FROM admin_info WHERE phone_number = ? ";
				break;
		}

		$row = $this->db->countRow($query, [ $phoneNumber ]);
		return $row > 0;
	}
}