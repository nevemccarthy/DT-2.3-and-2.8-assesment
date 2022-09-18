<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_DT200_web_database");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/*SQL query to return all drinks*/
$drink_query = "SELECT drink, sugar, amount, available, cost
FROM Drinks";

/*query the database*/
$drink_result = mysqli_query($dbcon, $drink_query);

/*count our results*/
$drink_rows = mysqli_num_rows($drink_result);

if($drink_rows > 0) {
    echo "There were ".$drink_rows." results returned.";
} else {
    echo "No results found.";
}

$drink = $drink_record;

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
					echo $drink; 
					?> </h3>
				
				<?php
				$cost = "cost of chosen drink";
				$sugar = "sugar of chosen drink";
				$amount = "amount of mL in the chosen drink";
				$available = "Avalibility of chosen drink";
				
				function info($sugar, $amount, $available, $cost) {
					echo nl2br("Sugar is $sugar g \n Amount is $amount mL \n Avalilable? $available \n Cost is $ $cost");
				}
				
				echo info($sugar, $amount, $available, $cost);
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