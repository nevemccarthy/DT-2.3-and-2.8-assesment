<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_DT200_web_database");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/*SQL query to return all foods*/
$food_query = "SELECT food, sugar, amount, available, cost
FROM Foods";

/*query the database*/
$foodk_result = mysqli_query($dbcon, $food_query);

/*count our results*/
$food_rows = mysqli_num_rows($food_result);

if($food_rows > 0) {
    echo "There were ".$food_rows." results returned.";
} else {
    echo "No results found.";
}

$food = "'chosen food'";

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
				<li><a title="Home page" href="index.php" >Home</a></li>
				<li><a title="Drinks page" href="drinks.php">Drinks</a></li>
				<li><a title="Food page" href="food.php">Food</a></li>
				<li><a title="Weekly Specials page" href="specials.php">Weekly Specials</a></li>
			</ul>
		</nav>
		</header>
			
			<article>
				<h3>Information on <?php 
					echo $food; 
					?> </h3>
				
				<?php
				$cost = 20;
				$sugar = 20;
				$amount = 20;
				$available = "Yes";
				
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