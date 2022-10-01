<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_DT200_web_database");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/* Get from the specials id from specials page else set default */
if(isset($_GET['specials_sel'])){
    $specials_id = $_GET['specials_sel'];
} else {
	$specials_id = 1;
}

if(isset($_GET['specials_sel'])){
    $food_id = $_GET['specials_sel'];
} else {
	$food_id = 1;
}

if(isset($_GET['specials_sel'])){
    $drink_id = $_GET['specials_sel'];
} else {
	$drink_id = 1;
}

/* Create the SQL query */
$this_specials_query = "SELECT * FROM Specials WHERE Specials.specials_id = '" .$specials_id . "'";
 /* Perform the query against the database */
$this_specials_result = mysqli_query($dbcon, $this_specials_query);
/* Fetch the result into an associative array */
$this_specials_record = mysqli_fetch_assoc($this_specials_result);

/* Create the drink SQL query */
$this_drink_query = "SELECT * FROM Drinks WHERE Drinks.drink_id = '" .$drink_id . "'";
 /* Perform the query against the database */
$this_drink_result = mysqli_query($dbcon, $this_drink_query);
/* Fetch the result into an associative array */
$this_drink_record = mysqli_fetch_assoc($this_drink_result);

/* Create the food SQL query */
$this_food_query = "SELECT * FROM Foods WHERE Foods.food_id = '" .$food_id . "'";
 /* Perform the query against the database */
$this_food_result = mysqli_query($dbcon, $this_food_query);
/* Fetch the result into an associative array */
$this_food_record = mysqli_fetch_assoc($this_food_result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Specials Information</title>
	<link rel='stylesheet' type='text/css' href='styles.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>

<body> 
	<div id="container">
		
		<header>
			<h1>Specials Info</h1>
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
				<h3>Information for specials on <?php 
					echo $this_specials_record['week_day']; 
					?> </h3>
				
				<?php
				echo "<p> Specials Day: ". $this_specials_record['week_day'] . "<br>";
				echo "<p> Includes: ". $this_food_record['food'] . " & " . $this_drink_record['drink'] . "<br>";
				echo "<p> Cost: $". $this_specials_record['cost'] . "<br>";
				echo "<p> Sugar: ". $this_specials_record['sugar'] . "g <br>";
				echo "<p> Available: ". $this_specials_record['available'] . "<br>";
				?>
				
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