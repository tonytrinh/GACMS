<?php
	$admin_email = 	"trinhtuanduong2@gmail.com";//this email used to receive message from "contact us"
	date_default_timezone_set('ASIA/Taipei');
	
	if(!defined('DS'))
		define('DS', DIRECTORY_SEPARATOR);
	
	if(!defined('BASE_DIR'))
		define('BASE_DIR', dirname(dirname(__FILE__)).DS);
	if(!defined('SESSION_DIR'))
		define('SESSION_DIR', BASE_DIR . 'tmp' . DS);
	if(!defined('SITE_NAME'))
		define('SITE_NAME', 'UTP GA CMS');
	if(!defined('INCLUDES_DIR'))
		define('INCLUDES_DIR', dirname(__FILE__) . DS);
		
    $_PHPLIB['basedir'] = BASE_DIR;
	$_PHPLIB['sessdir'] = SESSION_DIR;
	$_PHPLIB['title'] = SITE_NAME;
	
	session_save_path(SESSION_DIR);
	session_start();
	
	
    $maxUploadFileSize 	= 8388608;	// 8MB
	$acceptFileType 	= array("pdf", "doc", "txt");
	$acceptImageType 	= array("gif", "jpg", "png");
	$acceptAllType 		= array("gif", "jpg", "png","pdf", "doc", "txt");

	$results_per_page	= 20;
	
	$host = "localhost";    	// Host name
	
	//offline conf
	/*$username = "root";             // Mysql username
	$password = "";       	// Mysql password	
	$db_name = "GACMS";       // Database name*/
	
	//offline conf
	$username = "pluzmene_tony";             // Mysql username
	$password = "tonymissie123";       	// Mysql password	
	$db_name = "pluzmene_gacms";       // Database name
	
	$table_user 	= 'user';
	$table_country 	= 'country';
	$con = mysql_connect("$host","$username","$password");
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db("$db_name", $con);

	$owner_email_address= '';
	$owner_email_from = 'trinhtuanduong2@gmail.com';
	$owner_email_name = 'GA CMS Support Team';
	
    //SMTP
	$smtpfrom = 'trinhtuanduong2@gmail.com';
	$smtpname = 'trinhtuanduong2@gmail.com';
	$smtphost = 'smtp.gmail.com';
	$smtpport = '465';
	$smtpuser = 'trinhtuanduong2@gmail.com';
	$smtppass  = 'dummy1010';
	
?>
