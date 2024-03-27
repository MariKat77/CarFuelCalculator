<?php
	include_once 'header.php';

?>

	<section>
		
		<div class="contactcontainer">
		<div class="f-c-calc">
		<h5>Any question? Just write to us, we will reply as fast as possible!</h5>
		<br><br>
		<form action="contact.inc.php" method="post">
			<input type="text" name="name" placeholder="Name">
			<br>
			<input type="text" name="email" placeholder="Your e-mail">
			<br>
			<input type="text" name="subject" placeholder="Subject">
			<br>
			<textarea type="message" name ="message" placeholder="Message..."></textarea>
			<br>
			<button type="submit" name="send">Send Message</button>
			<br>
			
			<?php
				if(isset($_GET['error'])){
				if($_GET['error'] == 'success') {
				echo "<p style='color:white'>Your message have been sent!</p>";}
				else if(($_GET['error'] == 'emptyinputcontact')){
				echo "<p style='color:white'>Please Fill in all fields!!</p>";}
				}?>
		</form>
		</div>
		</div>
	</section>
	
	
<?php
	include_once 'footer.php';

?>
	
