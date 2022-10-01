<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_DT200_web_database");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/*SQL query to return all drinks*/
$specials_query = "SELECT * FROM Specials";

/*query the database*/
$specials_result = mysqli_query($dbcon, $specials_query);

/*count our results*/
$specials_rows = mysqli_num_rows($specials_result);

if($specials_rows > 0) {
    echo "There were ".$specials_rows." results returned.";
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
	$specials_query = "SELECT specials_id, week_day FROM Specials ORDER BY week_day ASC";
	$specials_result = mysqli_query($dbcon, $specials_query);
} if($order_id == 2) {
	$specials_query = "SELECT specials_id, week_day FROM Specials ORDER BY sugar ASC";
	$specials_result = mysqli_query($dbcon, $specials_query);
} if($order_id == 3) {
	$specials_query = "SELECT specials_id, week_day FROM Specials ORDER BY cost ASC";
	$specials_result = mysqli_query($dbcon, $specials_query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Specials</title>
	<link rel='stylesheet' type='text/css' href='styles.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>

<body> 
	<div id="container">
		
		<header>
			<h1>Specials</h1>
		<nav>
			<ul>
				<li><a title="Home page" href="index.php" >Home</a></li>
				<li><a title="Drinks page" href="drinks.php">Drinks</a></li>
				<li><a title="Food page" href="food.php">Food</a></li>
				<li><a title="Weekly Specials page" href="specials.php">Weekly Specials</a></li>
			</ul>
		</nav>
		</header>
			
			<article>
				<h3>Ordering the data form</h3>
				<!--orders form-->
				<form name='order_form' id='order_form' method='get' action='specials.php'>
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
					<input type="submit" name="order_button" id="order_button" value="Order specials">
				</form>
				
				<h3>Specials form</h3>
				<!--specials form-->
				<form name ='specials_form' id='specials_form' method='get' action='specials_display.php'>
					
					<select id ='specials_sel' name='specials_sel'>
						<!--options-->
						<?php 
						while($specials_record = mysqli_fetch_assoc($specials_result)){
							echo"<option value ='". $specials_record['specials_id']."'>";
							echo $specials_record['week_day'];
							echo"</option>";
						}
						?>
					</select>
					
					<input type='submit' name='specials_button' value='Show me information on this special'>
					
					<br><br><br><br><br>
						
				</form>
			</article>
		
			<article id="article2">
				<img src="images/DSC_0219.JPG"  width =300 alt="Cafe sign" title="Cafe sign" />
				<img src="images/DSC_0123.JPG"  width =300 alt="Brownies" title="Brownies" />
			</article>
				
		<footer>
			<p>&copy; Neve McCarthy 2022</p>
			<p>All images used taken by Neve McCarthy</p>
			<p><b>Information last updated Sep 2022</b><p>
		</footer>			
	</div>
</body>