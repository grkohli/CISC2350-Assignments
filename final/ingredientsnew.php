<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title> List of Ingredients </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="dropdownmenu">
			<button class="menubttn"> Menu </button>
			<div class="content">
				<a href="final.php"> Home </a>
				<a href="about.html"> About Us </a>
				<a href="recipes.php"> Our Collection of Recipes </a>
				<a href="ingredientsnew.php"> Create a List of Ingredients</a>
				<a href="contactus.php"> Contact Us </a>
			</div>
		</div>

		<div>
			<h3> List of Ingredients</h3>
			<?php 
				$db_hostname = 'localhost';  
				$db_database = 'sample';
				$db_username = 'root'; 
				$db_password = 'root';

				$db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
			 
			 	if (!$db_conn) {
					echo "Error: Unable to connect to MySQL." . PHP_EOL;
					echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
					echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
					exit; 
				}
			?>
		</div>

		<div>
			<p> You can add ingredients you may need right here! </p>
			
			<form name="Ingredients List" action= "ingredientsnew.php" method="post">
			<fieldset>
				<label for="ingredientname"> Ingredient: </label>
				<input type="text" name="ingredientname">
				<br>
				<!-- <label for="quantity"> Quantity: </label>
				<input type="text" name="quantity">
				<br> -->
				<input type="submit" value="Add to List">
			</fieldset>

			<?php
				$query = "SELECT * FROM ingredients";
				$result = mysqli_query($db_conn, $query);

				$ingredient_name = $_POST['ingredientname'];
				
				$sql = "INSERT INTO ingredients (ingredientname) VALUES ('$ingredient_name')";

				if(mysqli_query($db_conn, $sql)){
    				//echo "Added to your list successfully!";
				} else{
   					echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_conn);
				}

				mysqli_close($db_conn);
	
				if (mysqli_num_rows($result) > 0) {
	
				 	while ( $row = mysqli_fetch_assoc($result)) {
				 		
						echo "</br>";
		
						echo "Ingredient Name: ${row['ingredientname']} </br> ";
						//echo "Quantity: ${row['quantity']} </br> ";
					}
				 } else {
				 	echo "No results found.";
				 }
				
				 mysqli_close($db_conn);

			 ?>
		</div>

	</body>

</html>