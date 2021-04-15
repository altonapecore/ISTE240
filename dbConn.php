<?php
	//mysqli(server, username, pass(that you logged into phpMyAdmin with), db)
	$mysqli = new mysqli('localhost', 'iste240t44', 'Off-street2$talcum', 'iste240t44');
	//$conn is holding an object! $conn->method(), %conn->property
	//let's do a test
	if( mysqli_connect_errno() ){ // if I get in here, something went wrong
		echo 'connection failed: ' . mysqli_connect_error();
		exit();
	}else{
		//echo 'connection good';
	}
?>