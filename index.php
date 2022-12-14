<?php

/*Connect to database */
$dbcon = mysqli_connect("localhost", "nevemccarthy", "Bu72U8j", "nevemccarthy_cafe");

if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEGC Cafe</title>
	<link rel='stylesheet' type='text/css' href='styles.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>

<body> 
	<div id="container">
		
		<header>
			<h1>WEGC Cafe</h1>
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
			<h2> Wellington east girls college </h2>
			<p> Kia Ora and welcome to the Wellington east girls college cafe website. The school cafe is run in partnership with Kāpura. Wellington east girls college was built in 1925 and currently has 1058 students. It is located right above Victoria Tunnel at 131 Austin Street, Mount Victoria, Wellington 6011. It is a very diverse school and has a great canteen! </p>
			
			<h2> About our staff </h2>
			<p> The staff that work at the WEGC canteen are very experienced and super nice. The school hires students as well so that they can work and earn money while at school. There is always fresh food served and has a whole variety of selections. Kāpura has over 800 employees stretched across over 35 venues and is involved with the Ka Ora Ka Ako “Healthy School Lunch Programme”. </p>
			
			<h2> About this website </h2>
			<p> This website was made by Neve McCarthy for a year 12 digital technology assessment. She had to create a website that displays information such as sugar and cost on the different products sold at the WEGC cafe. </p>
		</article>
		
		<article id="article2">
			<img src="images/DSC_0360.jpg"  width =300 alt="Single muffin" title="Single muffin">
			<img src="images/DSC_0124.JPG"  width =300 alt="Cafe bench display" title="Cafe bench display">
			<img src="images/DSC_0224.JPG"  width =300 alt="School hall near cafe" title="School hall near cafe">
			<img src="images/DSC_0227.JPG"  width =300 alt="Seats by cafe" title="Seats by cafe">
			<img src="images/DSC_0218.JPG"  width =300 alt="WEGC balloons" title="WEGC balloons">
			<img src="images/DSC_0374.jpg"  width =300 alt="Toasties" title="Toasties">
			<img src="images/DSC_0226.JPG"  width =300 alt="School hall near cafe" title="School hall near cafe">
			<img src="images/DSC_0120.JPG"  width =300 alt="Fruit salad" title="Fruit salad">
		</article>
			
		<footer>
			<p>&copy; Neve McCarthy 2022</p>
			<p>All images used taken by Neve McCarthy</p>
			<p><b>Information last updated Sep 2022</b><p>
		</footer>			
	</div>
</body>
