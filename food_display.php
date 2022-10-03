<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_DT200_web_database");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/* Get from the food id from foods page else set default */
if(isset($_GET['food_sel'])){
    $food_id = $_GET['food_sel'];
} else {
	$food_id = 1;
}

/* Create the SQL query */
$this_food_query = "SELECT * FROM Foods WHERE Foods.food_id = '" .$food_id . "'";
 /* Perform the query against the database */
$this_food_result = mysqli_query($dbcon, $this_food_query);

/* Fetch the result into an associative array */
$this_food_record = mysqli_fetch_assoc($this_food_result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Foods Information</title>
	<link rel='stylesheet' type='text/css' href='styles.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>

<body> 
	<div id="container">
		
		<header>
			<h1>Foods Info</h1>
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
				<h3>Information on <?php 
					echo $this_food_record['food']; 
					?> </h3>
				
				<?php
				echo "<p> Food Name: ". $this_food_record['food'] . "<br>";
				echo "<p> Cost: $". $this_food_record['cost'] . "<br>";
				echo "<p> Sugar: ". $this_food_record['sugar'] . "g <br>";
				echo "<p> Vegetarian: ". $this_food_record['veg'] . "<br>";
				echo "<p> Available: ". $this_food_record['available'] . "<br>";
				?>
				
			</article>
		
			<article id="article2">
				<img src="images/DSC_0374.jpg"  width =300 alt="Sandwiches and donuts" title="Sandwiches and donuts" />
				<img src="images/DSC_0119.JPG"  width =300 alt="Sandwiches and donuts" title="Sandwiches and donuts" />
			</article>
				
		<footer>
			<p>&copy; Neve McCarthy 2022</p>
			<p>All images used taken by Neve McCarthy</p>
			<p><b>Information last updated Sep 2022</b><p>
		</footer>			
	</div>
</body>