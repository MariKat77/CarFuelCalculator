<?php
//this code require special zip file 'sendmail' which we've downloaded
//and change some parameters for sending
if(isset($_POST["send"]))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$sendTo = "automotivesitecontact@gmail.com";
	$headers = "Email sent from: ". $email;
	$text = "You have new message from ".$name.".\n\n".$message;
	
	require_once 'function.inc.php';
	if(emptyInputContact($name, $email, $subject, $message) !== false){
		header("Location: contact.php?error=emptyinputcontact");
		exit();
		}
	
	if(mail($sendTo, $subject, $text, $headers))
	{
		header("location: contact.php?error=success");
		exit();
	}
	

}
else{
	echo "Doesn't work!";
}


?>