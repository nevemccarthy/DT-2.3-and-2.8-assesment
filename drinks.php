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
				<li><a title="Home page" href="index.php" >Home</a></li>
				<li><a title="Drinks page" href="drinks.php">Drinks</a></li>
				<li><a title="Food page" href="food.php">Food</a></li>
				<li><a title="Weekly Specials page" href="specials.php">Weekly Specials</a></li>
			</ul>
		</nav>
		</header>
			
			<article>
				<h3>Drinks form</h3>
				<!--Drinks form-->
				<form name ='drinks_form' id='drinks_form' method='get' action='drink_display_test.php'>
					
					<select id ='drink' name='drink'>
						<!--options-->
						<?php 
						while($drink_record = mysqli_fetch_assoc($drink_result)){
							echo"<option value'". $drink_record["drink_id"]."'>";
							echo $drink_record['drink'];
							echo"</option>";
						}
						?>
						
					</select>
					
					<input type='submit' name='drinks_button' value='Show me information on this drink'>
					
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						
				</form>
			</article>
		
			<article id="article2">
				<img src="images/DSC_0351.jpg"  width =300 alt="Stacked coffee cups" title="Stacked coffee cups" />
				<img src="images/DSC_0366(1).jpg"  width =300 alt="Coffee cup lids" title="Coffee cup lids" />
			</article>
				
		<footer>
			<p>&copy; Neve McCarthy 2022</p>
			<p>All images used taken by Neve McCarthy</p>
			<p><b>Information last updated Sep 2022</b><p>
		</footer>			
	</div>
</body>
	