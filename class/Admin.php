<?php
require_once 'Config.php'; 
require_once 'ClassAutoloader.php';

//charging the class autoloader
ClassAutoloader::Register();

class Admin{

	public $response = array();

    public $visitor = VISITOR;
    public $admin   = ADMIN;

	public function __construct(){
		$db = new DBQuery();
		$this->db = $db;

		$app = new Common();
		$this->app = $app;
	}

	public function checkAdminLogin($email, $password){

		if($this->app->isEmailExist($email, $this->admin)){

			$query = "SELECT password FROM admin_info WHERE email = ?";

			$row = $this->db->getRow($query, [ $email]);
			$passwordHash = $row->password;

			return $passwordHash === md5($password) ? true : WRONG_PASSWORD;

		}else{

			return FALSE;
		}
	}

	public function getAdminInfo($idAdmin){

		$query = "SELECT * FROM admin_info WHERE id_admin = ?";
		$result = $this->db->getRow($query, [ $idAdmin ]);

		return $result;
    }

    public function getAdminInfoByEmail($email){

		$query = "SELECT * FROM admin_info WHERE email = ?";
		$result = $this->db->getRow($query, [ $email ]);

		return $result;
    }
    
    public function getAllVisit(){
        $query = "SELECT * FROM visit_info";
		$result = $this->db->getRows($query, []);

		return $result;
    }

    public function getAllVisitor(){
        $query = "SELECT * FROM visitor_info";
		$result = $this->db->getRows($query, []);

		return $result;
    }
} 

?>