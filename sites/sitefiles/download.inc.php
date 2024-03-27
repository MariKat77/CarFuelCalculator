<?php

if(isset($_POST["download"])){
	include_once 'db.inc.php';
	$userid = $_SESSION['id'];
	if(isset($_POST['check1']))
	{						
		$sql1="SELECT `date`, `fuel` from `stats` WHERE `userid` = $userid;";					
		$result1 = mysqli_query($conn, $sql1);
		
		while($row = mysqli_fetch_array($result1)){
			
			echo  "<p style='color:white'>Date: $row[date],  Liters: $row[fuel]</p>";
		}
			echo "<br>";
		} 	

	if(isset($_POST['check2']))
	{						
		$sql2="SELECT `date`, `distance` from `stats` WHERE `userid` = $userid;";					
		$result2 = mysqli_query($conn, $sql2);
		
		while($row = mysqli_fetch_array($result2)){
			echo  "<p style='color:white'>Date: $row[date],  Kilometers: $row[distance]</p>";
		}
			echo "<br>";
	
	}
	if(isset($_POST['check3']))
	{						
		$sql3="SELECT `date`, `money` from `stats` WHERE `userid` = $userid;";					
		$result3 = mysqli_query($conn, $sql3);
		
		while($row = mysqli_fetch_array($result3)){
			echo  "<p style='color:white'>Date: $row[date],  Money: $row[money]$</p>";
		}
			echo "<br>";
	}
	
	if(isset($_POST['check4']))
	{						
		$sql4="SELECT SUM(`fuel`) AS value1_sum from `stats` WHERE `userid` = $userid;";					
		$result4 = mysqli_query($conn, $sql4);
		
		while($row = mysqli_fetch_array($result4)){
			echo  "<p style='color:white'>Total fuel used: $row[value1_sum] liters</p>";
		}
			echo "<br>";
	}
	
	if(isset($_POST['check5']))
	{						
		$sql5="SELECT SUM(`distance`) AS value2_sum from `stats` WHERE `userid` = $userid;";					
		$result5 = mysqli_query($conn, $sql5);
		
		while($row = mysqli_fetch_array($result5)){
			echo  "<p style='color:white'>Total distance travelled: $row[value2_sum] kilometers</p>";
		}
			echo "<br>";
	}
	
	if(isset($_POST['check6']))
	{						
		$sql6="SELECT SUM(`money`) AS value3_sum from `stats` WHERE `userid` = $userid;";					
		$result6 = mysqli_query($conn, $sql6);
		
		while($row = mysqli_fetch_array($result6)){
			echo  "<p style='color:white'>Total money spent: $row[value3_sum] $</p>";
		}
		echo "<br>";
	}
	mysqli_close($conn);
}
?>