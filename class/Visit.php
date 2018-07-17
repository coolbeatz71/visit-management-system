<?php

require_once 'Config.php'; 
require_once 'ClassAutoloader.php';

//charging the class autoloader
ClassAutoloader::Register();

class Visit{

	public $response = array();

	public $userRole = VISITOR;

	public function __construct(){
		$db = new DBQuery();
		$this->db = $db;

		$app = new Common();
		$this->app = $app;
	}

	public function createVisit($idVisitor, $branchName, $visitDate, $visitTime, $visitReason){

		$createAt    = date("Y-m-d");
		$visitCode   = strtoupper(uniqid());

		$query  =  "INSERT INTO visit_info (
						id_visitor, visit_code, branch_name, visit_date, visit_time, 
						visit_reason, creation_date) 
					VALUES (?, ?, ?, ?, ?, ?, ?)";
		
		$result = $this->db->insertRow($query, [
			$idVisitor, $visitCode, $branchName, $visitDate, $visitTime, $visitReason, $createAt
		]);

		return $result ? true : false;
	}

	public function getVisitorId(){
		$id = $this->db->getLastInsertId();
		return $id;
	}
} 

?>