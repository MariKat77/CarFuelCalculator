<?php
	include_once 'header.php';
?>


	<section>
			
			<div class="login-form">
			<h1>Log in</h1><br>
			<form action="login.inc.php" method="post">
				<input type="text" name="name" placeholder="Username/Email...">
				<br>

				<input type="password" name="password" placeholder="Password...">
				<br>
				<button type="submit" name="submit">Log in</button>
				<br>
				<a href="signup.php"><p>Don't have account? Register now!</p></a>
				<br>
			</form>
			<?php
			if(isset($_GET["error"])){
			
			if($_GET["error"] == "emptyinputlogin")
			{
				echo "<p>There are empty inputs. Try again.</p>";
			}
			else if($_GET["error"] == "wronglogin"){
				echo "<p>No user found. Check you username.</p>";
			}
			}
			?>
			</div>
			
	   </section>
	
	


<?php
	include_once 'footer.php';
?>