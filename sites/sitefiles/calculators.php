<?php
	include_once 'header.php';
?>
<!-- -->
<section class = "maincontainer">
	<div class = "leftcontainer">
	<!--Calculator nr 1-->
		<div class="f-c-form">
			<h2>Fuel Consumption Calculator</h2>
			<br>
			<div class="f-c-calc">
				<form>
					<input type="number" step="0.01" name="fuel" placeholder="Fuel [L]">
					<br>
					
					<input type="number" step="0.01" name="dist1" placeholder="Distance [km]">
					<br>
					<button type="submit" name="submit">Calculate</button> 
					<br><br>
					
					<?php
						require_once 'function.inc.php';
						
						if(isset($_GET["submit"])){
						$num1 = $_GET["fuel"];
						$num2 = $_GET["dist1"];
						if(emptyInputsCalcOne($num1, $num2) !== false){
							echo '<p>Pusto!</p>';
						}
						else{
						echo '<p>Fuel Consumption:</p>';
						$result = round(($num1*100)/$num2,2);
						echo "<p style='color:white'>$result l/100km</p>";}}
						?>
				</form>
			</div>
		</div>
	<!--Calculator nr 2-->
		<div class="f-c-form">
		<h2>Travel Cost Calculator</h2>
		<br>
			<div class="f-c-calc">
				<form>
					<input type="number" step="0.01" name="dist2" placeholder="Distance [km]">
					<br>
					<input type="number" step="0.01" name="fuelusage" placeholder="Fuel Efficiency [L/100km]">
					<br>
					<input type="number" step="0.01" name="price" placeholder="Gas/Fuel price [$]">
					<br>
					<button type="submit" name="submit2">Calculate</button> 
					<br><br>
					<?php
						require_once 'function.inc.php';
						
						if(isset($_GET["submit2"])){
						
						$var1 = $_GET["dist2"];
						$var2 = $_GET["fuelusage"];
						$var3 = $_GET["price"];
						if(emptyInputsCalcTwo($var1, $var2, $var3) !== false){
							echo '<p>Pusto!</p>';
						}
						else{
						echo '<p>Cost of travel:</p>';
						$result = round(($var1/100)*$var2*$var3,2);
						echo "<p style='color:white'>$result $</p>";}}
					?>
				</form>
			</div>
		</div>
	</div>
	<div class = "rightcontainer">
	<!--Calculator nr 3-->
		<div class="f-c-form">
			<h2>Electric usage calculator</h2>
			<br>
				<div class="f-c-calc">
					<form>
						<input type="number" name="electr3" placeholder="Amount of kWh">
						<br>
						
						<input type="number" name="dist3" placeholder="Distance in kilometers">
						<br>
						<button type="submit" name="submit3">Calculate</button> 
						<br><br>
						<?php
							require_once 'function.inc.php';
							
							if(isset($_GET["submit3"])){
							
							$num1 = $_GET["electr3"];
							$num2 = $_GET["dist3"];
							if(emptyInputsCalcOne($num1, $num2) !== false){
								echo '<p>Please fill all fields!</p>';
							}
							else{
							echo '<p>Electricity Consumption:</p>';
							$result = round(($num1/$num2)*100,2);
							echo "<p style='color:white'>$result kWh/100km</p>";}}
					?>
					</form>
				</div>
			</div>
	<!--Calculator nr 4 electric-->
		<div class="f-c-form">
			<h2>Electric Car Travel Calculator</h2>
			<br>
				<div class="f-c-calc">
					<form>
						<input type="number" step="0.01" name="dist4" placeholder="Distance [km]">
						<br>
						
						<input type="number" step="0.01" name="usage" placeholder="Efficienty [kWh/100km]">
						<br>
						<input type="number" step="0.001" name="electr" placeholder="Electricity [Cent/kWh]">
						<br>
						<button type="submit" name="submit4">Calculate</button> 
						<br><br>
						<?php
							require_once 'function.inc.php';
							if(isset($_GET["submit4"])){
							
							$var1 = $_GET["dist4"];
							$var2 = $_GET["usage"];
							$var3 = $_GET["electr"];
							if(emptyInputsCalcTwo($var1, $var2, $var3) !== false)
							{
								echo '<p>Fill in all fields!</p>';
							}
							else{
							echo '<p>Cost of Travel:</p>';
							$result = round(($var1/100)*$var2*($var3/100),2);
							echo "<p style='color:white'>$result $</p>";}}
						?>
					</form>
				</div>
			</div>
		</div>		
</section>	
<?php
	include_once 'footer.php';
?>








