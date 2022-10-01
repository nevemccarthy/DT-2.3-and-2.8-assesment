<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_DT200_web_database");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/* Get from the drink id from drinks page else set default */
if(isset($_GET['drink_sel'])){
    $drink_id = $_GET['drink_sel'];
} else {
	$drink_id = 1;
}

/* Create the SQL query */
$this_drink_query = "SELECT * FROM Drinks WHERE Drinks.drink_id = '" .$drink_id . "'";
 /* Perform the query against the database */
$this_drink_result = mysqli_query($dbcon, $this_drink_query);
/* Fetch the result into an associative array */
$this_drink_record = mysqli_fetch_assoc($this_drink_result);

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
				echo "<p> Cost: $". $this_drink_record['cost'] . "<br>";
				echo "<p> Amount: ". $this_drink_record['amount'] . "mL <br>";
				echo "<p> Sugar: ". $this_drink_record['sugar'] . "g <br>";
				echo "<p> Available: ". $this_drink_record['available'] . "<br>";
				?>
				
			</article>
		
			<article id="article2">
				<img src="images/DSC_0344.jpg"  width=300 alt="Coffee Machine" title="Coffee Machine" />
				<img src="images/DSC_0345(1).jpg"  width=300 alt="Ice tea" title="Ice tea" />
			</article>
				
		<footer>
			<p>&copy; Neve McCarthy 2022</p>
			<p>All images used taken by Neve McCarthy</p>
			<p><b>Information last updated Sep 2022</b><p>
		</footer>			
	</div>
</body>