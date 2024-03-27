<?php
	include_once 'header.php';

?>

	<div>

		<section class = "maincontainer">
		<div class="statcontainer">
			<div class="f-c-form">
				<h2 style="color:white">Download your data!</h2>
				<br>
				<div class="f-c-calc" action="download.inc.php">
					<form method="post">
						<input type="checkbox" name="check1" ><label>  All time fuel used </label>
						<br><br>
						<input type="checkbox" name="check2" ><label>  All time distance traveled</label>
						<br><br>
						<input type="checkbox" name="check3" ><label>  All time money spent</label>
						<br><br>
						<input type="checkbox" name="check4" ><label>  Total fuel used</label>
						<br><br>
						<input type="checkbox" name="check5" ><label>  Total Distance</label>
						<br><br>
						<input type="checkbox" name="check6" ><label>  Total money spent</label>
						<br><br><br>				
						<button type="submit" name="download">Download data!</button> 
						<br><br>
						<?php
						require_once 'download.inc.php';
						?>
						
						
					</form>
				</div>
			</div>
			</div>
		
		
		</section>
	</div>
	


	
	
<?php
	include_once 'footer.php';
?>

	