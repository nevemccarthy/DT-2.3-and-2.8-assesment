<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_DT200_web_database");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/*SQL query to return all foods*/
$food_query =  "SELECT * FROM Foods";

/*query the database*/
$food_result = mysqli_query($dbcon, $food_query);

/*count our results*/
$food_rows = mysqli_num_rows($food_result);

if($food_rows > 0) {
    echo "There were ".$food_rows." results returned.";
} else {
    echo "No results found.";
}

/*SQL query for ordering*/
$order_query = "SELECT * FROM Orders";
$order_result = mysqli_query($dbcon, $order_query);

if(isset($_GET['order_sel'])) {
	$order_id = $_GET['order_sel'];
} else {
	$order_id = 1;
}

if($order_id == 1) {
	$food_query = "SELECT food_id, food FROM Foods ORDER BY food ASC";
	$food_result = mysqli_query($dbcon, $food_query);
} if($order_id == 2) {
	$food_query = "SELECT food_id, food FROM Foods ORDER BY sugar ASC";
	$food_result = mysqli_query($dbcon, $food_query);
} if($order_id == 3) {
	$food_query = "SELECT food_id, food FROM Foods ORDER BY cost ASC";
	$food_result = mysqli_query($dbcon, $food_query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Foods</title>
	<link rel='stylesheet' type='text/css' href='styles.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>

<body> 
	<div id="container">
		
		<header>
			<h1>Foods</h1>
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
				<form name='order_form' id='order_form' method='get' action='food.php'>
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
					<input type="submit" name="order_button" id="order_button" value="Order foods">
				</form>
				
				<h3>Foods form</h3>
				<!--Foods form-->
				<form name ='foods_form' id='foods_form' method='get' action='food_display.php'>
					
					<select id ='food_sel' name='food_sel'>
						<!--options-->
						<?php 
						while($food_record = mysqli_fetch_assoc($food_result)){
							echo"<option value ='". $food_record['food_id']."'>";
							echo $food_record['food'];
							echo"</option>";
						}
						?>
					</select>
					
					<input type='submit' name='foods_button' value='Show me information on this food'>
					
					<br><br><br><br><br><br><br><br><br><br><br><br>
						
				</form>
			</article>
		
			<article id="article2">
				<img src="images/DSC_0117.JPG"  width =300 alt="Food on display" title="Food on display" />
				<img src="images/DSC_0118.JPG"  width =300 alt="Food on display" title="Food on display" />
				<img src="images/DSC_0125.JPG"  width =300 alt="Food on display" title="Food on display" />
				<img src="images/DSC_0332.JPG"  width =300 alt="Food on display" title="Food on display" />
			</article>
				
		<footer>
			<p>&copy; Neve McCarthy 2022</p>
			<p>All images used taken by Neve McCarthy</p>
			<p><b>Information last updated Sep 2022</b><p>
		</footer>			
	</div>
</body>