

<?php
	if(isset($_POST["submit"]))
	{
		$fuel = $_POST["fuel"];
		$distance = $_POST["distance"];
		$money = $_POST["money"];
		$date = $_POST["date"];
		
		
		include_once 'stats.php';
		$userid = $_SESSION['id'];
		
		
		require_once 'db.inc.php';
		require_once 'function.inc.php';
		
		
		if(emptyInputs($fuel, $distance, $money, $date) !== false){
		header("Location: stats.php?error=emptyinputs");
		exit();
		}
		
		updateData($conn, $fuel, $distance, $money, $date, $userid);
		
	}
	else{
		header("location stats.php");
		exit();
		
	}
	

?>