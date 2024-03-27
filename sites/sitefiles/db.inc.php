<?php
//database details
//database was created on wampp server, because xampp server doesn't work on 
//our computers

$serverName ='localhost';
$Username ='root';
$Password ='';
$Name ='users';

$conn = mysqli_connect($serverName, $Username, $Password, $Name);

if (!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}


?>