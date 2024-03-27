<?php
	include_once 'header.php';
?>
    <section>
		
		<div class="signup-form">
		<h1>Sign Up</h1><br>
		<form action="signup.inc.php" method="post">
			<input type="text" name="name" placeholder="Username...">
			<br>
			<input type="text" name="email" placeholder="Email..">
			<br>
			<input type="password" name="password" placeholder="Password">
			<br>
			
			<input type="password" name="passwordrep" placeholder="Repeat Password...">
			<br>
			<button type="submit" name="submit">Sign Up</button>
			<br>
			<?php
			if(isset($_GET["error"])){
				
				if($_GET["error"] == "emptyinputsignup")
				{
					echo "<p>There are empty inputs. Try again.</p>";
				}
				else if($_GET["error"] == "invalidusername"){
					echo "<p>This is not a proper name. Try again.</p>";
				}
				else if($_GET["error"] == "invalidEmail"){
					echo "<p>This is not an email. Try again.</p>";
				}
				else if($_GET["error"] == "passwordsdontmatch"){
					echo "<p>Password doesn't match. Try again.</p>";
				}
				else if($_GET["error"] == "stmtfailed"){
					echo "<p>Something went wrong (stmtfailed). Contact us.</p>";
				}
				else if($_GET["error"] == "useralreadyexist"){
					echo "<p>Username already taken. Choose other username.</p>";
				}
				else if($_GET["error"] == "none"){
					header("location: login.php");
					exit();
				}
			}
			?>
		</form>
		</div>

	
	</section>
	
	
<?php
	include_once 'footer.php'
?>
