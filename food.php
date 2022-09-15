<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_DT200_web_database");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

/*SQL query to return all drinks*/
$food_query = "SELECT food, sugar, cost, available
FROM Foods";

/*query the database*/
$food_result = mysqli_query($dbcon, $food_query);

/*count our results*/
$food_rows = mysqli_num_rows($food_result);

if($food_rows > 0) {
    echo "There were ".$food_rows." results returned.";
} else {
    echo "No results found.";
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
				<li><a title="Home page" href="index.php" >Home</a></li>
				<li><a title="Drinks page" href="drinks.php">Drinks</a></li>
				<li><a title="Food page" href="food.php">Food</a></li>
				<li><a title="Weekly Specials page" href="specials.php">Weekly Specials</a></li>
			</ul>
		</nav>
		</header>
			
			<article>
				<h3>Foods form</h3>
				<!--Foods form-->
				<form name ='foods_form' id='foods_form' method='get' action='food_display.php'>
					
					<select id ='food' name='food'>
						<!--options-->
						<?php 
						while($food_record = mysqli_fetch_assoc($food_result)){
							echo"<option value'". $food_record["food_id"]."'>";
							echo $food_record['food'];
							echo"</option>";
						}
						?>
					</select>
					
					<input type='submit' name='foods_button' value='Show me information on this food'>
					
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						
				</form>
			</article>
		
			<article id="article2">
				<img src="images/DSC_0354.jpg"  width =300 alt="" title="" />
				<img src="images/DSC_0374.jpg"  width =300 alt="" title="" />
				<img src="images/DSC_0354.jpg"  width =300 alt="" title="" />
				<img src="images/DSC_0374.jpg"  width =300 alt="" title="" />
			</article>
				
		<footer>
			<p>&copy; Neve McCarthy 2022</p>
		</footer>			
	</div>
</body>