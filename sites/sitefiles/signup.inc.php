<?php

if(isset($_POST["submit"]))
{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$passwordrep = $_POST["passwordrep"];
	
	require_once 'db.inc.php';
	require_once 'function.inc.php';
	
	if(emptyInputSignup($name, $email, $password, $passwordrep) !== false){
		header("Location: signup.php?error=emptyinputsignup");
		exit();
	}
	if(invalidUsername($name) !== false){
		header("Location: signup.php?error=invalidusername");
		exit();
	}if(invalidEmail($email) !== false){
		header("Location: signup.php?error=invalidEmail");
		exit();
	}
	if(passwordsdontMatch($password, $passwordrep) !== false){
		header("Location: signup.php?error=passwordsdontmatch");
		exit();
	}
	if(UserExist($conn, $name, $email) !== false){
		header("Location: signup.php?error=useralreadyexist");
		exit();
	}
	
	createUser($conn, $name, $email, $password);
}
else
{
	echo "Doesn't work";
	exit();
}
?>
