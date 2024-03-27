<?php
	include_once 'header.php';

?>

	<div>
		<section class = "maincontainer">
		<div class="statcontainer">
			<div class="f-c-form">
				<h2 style="color:white">Upload your data</h2>
				<br>
				<div class="f-c-calc">
					<form action="stats.inc.php" method="post">
						<input type="number" step="0.01" name="fuel" placeholder="Fuel used [L]">
						<br>
						
						<input type="number" step="0.01" name="distance" placeholder="Distance travelled [km]">
						<br>
						<input type="number" step="0.01" name="money" placeholder="Money paid [$]">
						<br>
						<input type="date"  name="date">
						<br>
						<button type="submit" name="submit">Send Data!</button> 
						<br><br>
							
					</form>
					<?php 
						if(isset($_GET["error"])){
			
							if($_GET["error"] == "emptyinputs")
							{
								echo "<p>Fill all inputs!</p>";
						}
						else if($_GET["error"] == "none")
						{
							echo "<p>Data have been saved</p>";
						}
						}?>
				</div>
			</div>
		</div>
		
		
		</section>
	</div>	
<?php
	include_once 'footer.php';
?>

	
