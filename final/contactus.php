<!DOCTYPE html>

<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<title>Contact Us Page</title>
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

	 	<h1> Contact Us: </h1>
	 		<br>
	 		<p> Let us know if you have any questions, or any suggested recipes you would like to see! Fill out the form below. </p>
		
		<form name="Suggestions" action= "contactus.php" method="post">
			<fieldset>
				<label for="first_name"> First Name: </label>
				<input type="text" name="first_name">
			
				<label for="last name"> Last Name: </label>
				<input type="text" name="last-name">
			</fieldset>

			<fieldset>
				<label for="email address"> Email Address: </label>
				<input type="text" name="email address">
			</fieldset>

			<fieldset>
				<p> Please select all that apply: </p>
				
				<label for="reason for contact"> To submit a recipe suggestion </label>
				<input type="checkbox" value="recipe suggestion" name="reason for contact">
				<br>
				<label for="reason for contact"> To submit a suggestion for our website </label>
				<input type="checkbox" value="website suggestion" name="reason for contact">
				<br>
				<input type="text" name="reason for contact">
				<br>
				<input type="submit" name="Submit">
			</fieldset>

			<p> Thank you for your input! </p>
		</form>


	</body>

</html>