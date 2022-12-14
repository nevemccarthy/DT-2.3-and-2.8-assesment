<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_DT200_web_database");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/*SQL query to return all drinks*/
$drink_query = "SELECT * FROM Drinks";
/*query the database*/
$drink_result = mysqli_query($dbcon, $drink_query);
/*count our results*/
$drink_rows = mysqli_num_rows($drink_result);

/** I have decided not to add this code in for aesthetic reasons but have turned it to a comment so if someone editing this 
code wants to change it or view the return results they already have the code ready.

if($drink_rows > 0) {
    echo "There were ".$drink_rows." results returned.";
} else {
    echo "No results found.";
} **/


/*SQL query for ordering*/
$order_query = "SELECT * FROM Orders";
$order_result = mysqli_query($dbcon, $order_query);

if(isset($_GET['order_sel'])) {
	$order_id = $_GET['order_sel'];
} else {
	$order_id = 1;
}

if($order_id == 1) {
	$drink_query = "SELECT drink_id, drink FROM Drinks ORDER BY drink ASC";
	$drink_result = mysqli_query($dbcon, $drink_query);
} if($order_id == 2) {
	$drink_query = "SELECT drink_id, drink FROM Drinks ORDER BY sugar ASC";
	$drink_result = mysqli_query($dbcon, $drink_query);
} if($order_id == 3) {
	$drink_query = "SELECT drink_id, drink FROM Drinks ORDER BY cost ASC";
	$drink_result = mysqli_query($dbcon, $drink_query);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Drinks</title>
	<link rel='stylesheet' type='text/css' href='styles.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>

<body> 
	<div id="container">
		
		<header>
			<h1>Drinks</h1>
		<nav>
			<ul>
				<li><a href="index.php" >Home</a></li>
				<li><a href="drinks.php">Drinks</a></li>
				<li><a href="food.php">Food</a></li>
				<li><a href="specials.php">Weekly Specials</a></li>
			</ul>
		</nav>
		</header>
			
			<article>
				<h3>Ordering the data form</h3>
				<!--orders form-->
				<form name='order_form' id='order_form' method='get' action='drinks.php'>
					<!-- Dropdown Menu -->
					<select name='order_sel' id='order_sel'>
						<!-- Options -->
						<?php
						while($order_record = mysqli_fetch_assoc($order_result)){
							echo "<option value ='".$order_record['order_id']."'>";
							echo $order_record['order'];
							echo "</option>";
						}
						?>
					</select>
					<!--- Sort Button -->
					<input type="submit" name="order_button" id="order_button" value="Order drinks">
				</form>
				
				<h3>Drinks form</h3>
				<!--Drinks form-->
				<form name ='drinks_form' id='drinks_form' method='get' action='drink_display.php'>

					<select id ='drink_sel' name='drink_sel'>
						<!--options-->
						<?php 
						while($drink_record = mysqli_fetch_assoc($drink_result)){
							echo"<option value ='". $drink_record['drink_id']."'>";
							echo $drink_record['drink'];
							echo"</option>";
						}
						?>
						
					</select>
					
					<input type='submit' name='drinks_button' value='Show me information on this drink'>
					<br><br><br><br><br><br><br><br><br><br><br><br><br>
				</form>

			</article>
		
			<article id="article2">
				<img src="images/DSC_0351.jpg"  width =300 alt="Stacked coffee cups" title="Stacked coffee cups">
				<img src="images/DSC_0366(1).jpg"  width =300 alt="Coffee cup lids" title="Coffee cup lids">
			</article>
				
		<footer>
			<p>&copy; Neve McCarthy 2022</p>
			<p>All images used taken by Neve McCarthy</p>
			<p><b>Information last updated Sep 2022</b><p>
		</footer>			
	</div>
</body>
	