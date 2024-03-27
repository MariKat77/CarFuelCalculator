<?php
	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$password = $_POST["password"];
		
		require_once 'db.inc.php';
		require_once 'function.inc.php';
		
		if(emptyInputLogin($name, $password) !== false){
		header("Location: login.php?error=emptyinputlogin");
		exit();
		}
		
		loginUser($conn, $name, $password);
		header("Location: login.php");
		exit();
	}
	else{
		header("Location: login.php");
		exit();
		
	}
	

?>