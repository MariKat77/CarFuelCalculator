<?php
////////////////////////////Sign in function/////////////////////////
//Function that checks if emputs are empty in singup page
function emptyInputSignup($name, $email, $password, $passwordrep){
	$result;
	if(empty($name)|| empty($email) || empty($password) || empty($passwordrep)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result; 
}
//Checking for proper znaki
function invalidUsername($name){
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}
//Function that check if email is real email
function invalidEmail($email){
	$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}
//Checking if passwords match each other
function passwordsdontMatch($password, $passwordrep){
		$result;
	if($password !== $passwordrep){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}
//Checking in data base if user exist
function UserExist($conn, $name, $email){
	$sql = "SELECT * FROM users_info WHERE login = ? OR email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: signup.php?error=stmtfailed");
		exit();
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $name, $email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else{
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}
//Creating new users
function createUser($conn, $name, $email, $password){
	$sql = "INSERT INTO `users_info`(`login`, `email`, `password`) VALUES (?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: signup.php?error=stmtfailed");
		exit();
	}
	
	$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedpassword);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	header("Location: signup.php?error=none");
	exit();
}
////////////////////////////////log in function////////////////////////////////
//Checking if imputs are empty
function emptyInputLogin($name, $password){
	$result;
	if(empty($name)||empty($password)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result; 
}
//Logging user and start session
function loginUser($conn, $name, $password){
	$UserExist = UserExist($conn, $name, $name);
	if($UserExist === false)
	{
		header("location: login.php?error=wronglogin");
		exit();
	}
	
	$hashedpassword = $UserExist["password"];
	$checkpassword = password_verify($password, $hashedpassword);
	
	if($checkpassword === false)
	{
		header("location: login.php?error=wronglogin");
		exit();
	}
	else if($checkpassword === true)
	{
		session_start();
		$_SESSION["id"] = $UserExist["id"];
		$_SESSION["name"] = $UserExist["login"];
		header("location: StronaGlowna.php");
		exit();
	}
	
}
///////////////////////Updating data to database//////////////////////
//Checking if imputs are empty
function emptyInputs($fuel, $distance, $money, $date){
	$result;
	if(empty($fuel)||empty($distance)||empty($money)||empty($date)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result; 
}
//Updating data, similar as CreateUser()
function updateData($conn, $fuel, $distance, $money, $date, $userid)
{
	$sql = "INSERT INTO `stats`(`fuel`, `distance`, `money`, `date`, `userid`) VALUES (?, ?, ?, ?, ?);";
	
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: stats.php?error=stmtfailed");
		exit();
	}
	
	
	mysqli_stmt_bind_param($stmt, "sssss",$fuel, $distance, $money, $date, $userid);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	header("Location: stats.php?error=none");
	exit();
}
///////////////////////Calculators function/////////////////////////////

function emptyInputsCalcOne($num1, $num2){
	$result;
	if(empty($num1)|| empty($num2)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result; 
}
//Checking if imputs are empty
function emptyInputsCalcTwo($var1, $var2, $var3){
	$result;
	if(empty($var1)|| empty($var2)|| empty($var3)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result; 
}
function emptyInputContact($name, $email, $subject, $message)
{
	$result;
	if(empty($name)||empty($email)||empty($subject)||empty($message)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result; 
}
?>

