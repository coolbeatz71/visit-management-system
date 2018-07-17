<?php
/**
	** zoom4Shop 1.0 v1.0
	** AuthorName: Mutombo Riy Jean-Vincent 
	** Year 3 Business Information Technology
	** University of Tourism, Technologies and Business Studies
	***********************************************************
	***********************************************************

	* This handles the configuration of the REST API
	* It contains all constants that will be used soon  
**/

//Constants for database connexion
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'v_m_s_gtbank');

//Authentication or Authorization (1-10)
define('WRONG_PASSWORD', 1);
define('USER_CREATED_SUCCESSFULLY', 2);
define('EMAIL_ALREADY_EXISTED', 5);
define('PHONE_ALREADY_EXISTED', 6);

//Sql error (11-20)
define('STMT_NOT_EXECUTED', 11);

//Users roles 
define('VISITOR', 'visitor');
define('ADMIN', 'admin');
define('VISIT', 'visit');

?>	