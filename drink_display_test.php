<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_DT200_web_database");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}


/*SQL query to return all drinks*//*
$drink_query = "SELECT drink, sugar, amount, available, cost FROM Drinks";

/*query the database*//*
$drink_result = mysqli_query($dbcon, $drink_query);

/*count our results*//*
$drink_rows = mysqli_num_rows($drink_result); */

/*Default value for page */
if(isset($_GET['drink_sel'])) {
	$drink_id = $_GET['drink_sel'];
} else {
	$drink_id = 1;
}

$this_drink_query = "SELECT * FROM Drinks WHERE Drinks.drink_id = '" .$drink_id . "'"; /* query is not structured correctly to run */
$this_drink_result = mysqli_query($dbcon, $this_drink_query);
$this_drink_record = mysqli_fetch_assoc($this_drink_result); 

/*
if($drink_rows > 0) {
    echo "There were ".$drink_rows." results returned.";
} else {
    echo "No results found.";
} 
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Drinks Information</title>
	<link rel='stylesheet' type='text/css' href='styles.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>

<body> 
	<div id="container">
		
		<header>
			<h1>Drinks Info</h1>
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
				<h3>Information on <?php 
					echo $this_drink_record['drink']; 
					?> </h3>
				
				<?php
				echo "<p> Drink Name: ". $this_drink_record['drink'] . "<br>";
				echo "<p> Cost: ". $this_drink_record['cost'] . "<br>";
				echo "<p> Amount: ". $this_drink_record['amount'] . "<br>";
				echo "<p> Sugar: ". $this_drink_record['sugar'] . "<br>";
				echo "<p> Available: ". $this_drink_record['available'] . "<br>";
				?>
				
				<br><br><br>
			</article>
		
			<article id="article2">
				<img src="images/DSC_0344.jpg"  width =300 alt="" title="" />
				<img src="images/DSC_0345(1).jpg"  width =300 alt="" title="" />
			</article>
				
		<footer>
			<p>&copy; Neve McCarthy 2022</p>
			<p>All images used taken by Neve McCarthy</p>
		</footer>			
	</div>
</body>