<?php
	$host = "localhost";
	$db = "pluzmene_gacms";
	
	$user = "root";
	$password = "";
	
	/*$user = "pluzmene_tony";
	$password = "tonymissie123";*/
	
	
	$connection = mysql_connect($host, $user, $password) 
		or die ("Cannot connect to the MySQL server ". mysql_error());

	mysql_select_db($db) 
		or die ("Cannot select database " . mysql_error());
	
?>
