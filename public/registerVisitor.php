<?php
	session_start();

	require_once "../class/Visitor.php";
	require_once "../class/Config.php";

	$app = new Visitor();

	$firstName   = $_POST['firstName'];
	$lastName    = $_POST['lastName'];
	$email       = $_POST['email'];
	$phoneNumber = $_POST['phoneNumber'];
	$password    = $_POST['password']; 
	$dateOfBirth = $_POST['dateOfBirth'];
	$address     = $_POST['address'];

	$reg = $app->registerVisitor($firstName, $lastName, $email, $phoneNumber, 
		$password, $dateOfBirth, $address);

	if($reg === true){

		$id    = $app->getVisitorId();
		$visitorInfo = $app->getVisitorInfo($id);
		$visit = $app->getVisitByVisitor($id); 

		$response['error'] = false;
		$response['visitorInfo']['idVisitor']   = $visitorInfo->id_visitor;
		$response['visitorInfo']['firstName']   = $visitorInfo->first_name;
		$response['visitorInfo']['lastName']    = $visitorInfo->last_name;
		$response['visitorInfo']['email']       = $visitorInfo->email;
		$response['visitorInfo']['phoneNumber'] = $visitorInfo->phone_number;
		$response['visitorInfo']['dateOfBirth'] = $visitorInfo->date_of_birth;
		$response['visitorInfo']['address']     = $visitorInfo->address;
		$response['visitorInfo']['visit']       = $visit;

		$_SESSION['visitorInfo'] = $response['visitorInfo'];

	}else if($reg === EMAIL_ALREADY_EXISTED){

		$response['error'] = true;
		$response['emailExist'] = true;	

	}

	echo json_encode($response);
?>