<?php
	session_start();
?>

<!DOCTYPE HTML> 

<html lang="en">

<head>
	<meta charset="utf-8"/> 
	<meta name="description" content="Internet technologies project">
	<title>Automotive site</title>
	<meta name="author" content="Mateusz, Mariusz" >
	<meta name="keywords" content="car, fuel, automotive, calculator, audi, mercedes, bmw, toyota, volkswagen">
	<meta name="viewport" content="width=device-width, initial-scal=1">
	<link rel="stylesheet" type="text/css" href="Styl.css?v<?php echo time(); ?>">
</head>

<body>
	<div class="background">
		<nav>
		<img src="logo.png" class="logo">
			<ul>
				<div class="dropdown">
				<li><a href="StronaGlowna.php"><h1>Home</h1></a></li>
				<div class = "dropdown-content">
					<a href="contact.php"><h2>Contact</h2></a>
					<a href="privacy.php"><h2>Privacy</h2></a>
				</div>
				</div>
				<?php
					if(isset($_SESSION["id"]))
					{
						echo "<div class='dropdown'>
						<li><a href='StronaGlowna.php'><h1>My Information</h1></a>			
						<div class = 'dropdown-content'>
						<a href='stats.php'><h2>Update information</h2></a>
						<a href='info.php'><h2>Download infromation</h2></a></li></div>";
						echo "<li><a href='calculators.php' id='Link'><h1>Calculators</h1></a></li>";
						echo "<li><a href='logout.inc.php' id='Link'><h1>Log out</h1></a></li>";}
					else
					{	
						echo "<li><a href='calculators.php' id='Link'><h1>Calculators</h1></a></li>"; 
						echo "<li><a href='login.php' id='Link'><h1>Log in</h1></a></li>";
						echo "<li><a href='signup.php' id='Link'><h1>Sign in</h1></a></li>";
					}?>
			</ul>
		</nav>	
	</div>