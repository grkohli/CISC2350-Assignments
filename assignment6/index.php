<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>About Me PHP Intro</title>
</head>

<body>
	<?php 
		define('MY_NAME', "Rosie Kohli");	//defined my name as a constant variable (strings). 
		$age = 19;
		$city = "New York City";			
		$birthday = "June 23, 1997";	//variable that states my birthday. It's a string even if it contains numbers because it's a string of chars.
		$favoritefood1 = "Thai Food";		//three variables stating my favorite foods (strings).
		$favoritefood2 = "Twice Baked Potato";
		$favoritefood3 = "Mint Chocolate Chip Ice Cream";
		$class1 = "Information and Web Programming";    //four variables stating classes I am currently taking, or will take (strings);
		$class2 = "Computer Algorithms";
		$class3 = "Multivariate Calculus II";
		$class4 = "Theory of Computation";
		
	 ?>
	<section>
		<h1><?php echo MY_NAME; ?></h1>		
			<p><?php echo "Birthday: " . $birthday; ?></p>	
			<p><?php echo "Age: " . $age; ?></p>
			<p><?php echo $city;  ?></p>

	</section>

	<section>
		<p><?php echo "Favorite Foods:"; ?></p>
			<ol>
			 	<li><?php echo $favoritefood1; ?></li>
			 	<li><?php echo $favoritefood2; ?></li>
			 	<li><?php echo $favoritefood3; ?></li>
			 </ol>

		<p><?php echo "Classes:"; ?></p>
			<ul>
				<li><?php echo $class1; ?></li>
				<li><?php echo $class2; ?></li>
				<li><?php echo $class3; ?></li>
				<li><?php echo $class4; ?></li>
			</ul>

	</section>
</body>

</html>