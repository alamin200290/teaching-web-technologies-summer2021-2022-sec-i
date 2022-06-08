<?php 
	session_start();

	/*$_GET
	$_POST
	$_REQUEST
	$_SERVER 
	$GLOBALS*/ 

/*	print_r($_REQUEST['username']);
	echo "<br>";
	print_r($_REQUEST['password']);*/

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if ($username == null || $password == null) {
		echo "invalid username/password <br>";
	}else{
		if($username == $password){
			$_SESSION['status'] = true;
			header('location: home.php');
		}else{
			echo "invalid user";
		}
	}



?>