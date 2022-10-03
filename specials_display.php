<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_DT200_web_database");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/* Get from the specials id from specials page else set default */
$specials_query = "SELECT Special.special_id, Foods.food, Drinks.drink, Specials.cost, Specials.week_day
 FROM Specials, Foods, Drinks
 WHERE Foods.food_id = Specials.food_id
 AND Specials.drink_id = Drinks.drink_id";
$specials_result = mysqli_query($dbcon, $specials_query);

if(isset($_GET['specials_sel'])) {
      $specials_id = $_GET['specials_sel'];
  } else {
      $specials_id = 1;
  }

$this_specials_query = "SELECT * FROM Specials WHERE Specials.specials_id = '" .$specials_id . "'";
$this_specials_result = mysqli_query($dbcon, $this_specials_query);
$this_specials_record = mysqli_fetch_assoc($this_specials_result);

$food = "SELECT Specials.food_id,Foods.food FROM Foods, Specials WHERE Foods.food_id = Specials.food_id AND Specials.specials_id = '" .$specials_id . "'";
$food_result = mysqli_query($dbcon, $food);
$this_food_record = mysqli_fetch_assoc($food_result);

$drink = "SELECT Specials.drink_id,Drinks.drink FROM Drinks, Specials WHERE Drinks.drink_id = Specials.drink_id AND Specials.specials_id = '" .$specials_id . "'";
$drink_result = mysqli_query($dbcon, $drink);
$this_drink_record = mysqli_fetch_assoc($drink_result);

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
				<li><a href="index.php" >Home</a></li>
				<li><a href="drinks.php">Drinks</a></li>
				<li><a href="food.php">Food</a></li>
				<li><a href="specials.php">Weekly Specials</a></li>
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