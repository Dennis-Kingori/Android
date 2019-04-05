<?php 

require_once('db_credentials.php');

function db_conn(){

	$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	conf_db_conn();
	return $connection;
}

function db_disconn($connection){

	if (isset($connection)) {
		mysqli_close($connection);
	}
}

function conf_db_conn(){
	if (mysqli_connect_errno()) {
		$msg = "DB CONNECTION FAILIURE ";
		$msg .= mysqli_connect_error();
		$msg .= " (" . mysqli_connect_errno() . ")";
		exit($msg);
	}
}

function conf_resultset($result_set){
	if (!$result_set) {
		exit("Database Query fail:");
	}
}

 ?>

