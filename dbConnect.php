<?php
	//Defining Constants
	define('HOST','mysql12.000webhost.com');
	define('USER','a7638847_sdee');
	define('PASS','mtsmondo064');
	define('DB','a7638847_kladza');
	
	//Connecting to Database
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
?>