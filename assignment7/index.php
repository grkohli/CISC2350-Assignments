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
		$favoritefoods = array("Thai Food", "Twice Baked Potato", "Mint Chocolate Chip Ice Cream" ); //indexed array containing my three favorite foods
		$classes = array("CS2350" => "Information and Web Programming", "CS4080" => "Computer Algorithms", "MATH2005" => "Multivariate Calculus", "CS4090" => "Theory of Computation" );    //associative array containing four classes
		$earned_credits = 51;
		$total_credits = 124;
		$credits_needed;		
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
			 	<li><?php echo $favoritefoods[0]; ?></li>
			 	<li><?php echo $favoritefoods[1]; ?></li>
			 	<li><?php echo $favoritefoods[2]; ?></li>
			 </ol>

		<p><?php echo "Classes:"; ?></p>
			<ul>
				<li><?php echo $classes["CS2350"]; ?></li>
				<li><?php echo $classes["CS4080"]; ?></li>
				<li><?php echo $classes["MATH2005"]; ?></li>
				<li><?php echo $classes["CS4090"]; ?></li>
			</ul>

	</section>

	<section>
		<p><?php echo "Earned Credits == " . $earned_credits; ?></p>
		<p><?php echo "Total Credits == " . $total_credits; ?></p>
		<?php 
			$credits_needed = $total_credits - $earned_credits;
		 ?>
		<p><?php echo "Total Credits Needed == " . $credits_needed;  ?></p>

		<p><?php echo "Classification: " ?></p>
		<?php 
				$freshmancredits = 30;
				$sophomorecredits = 60;
				$juniorcredits = 92;
				$seniorcredits = 124;
		 ?>
		 <p><?php echo "Credits I Currently Have == " . $earned_credits; ?></p>
		 <?php 
		 		if($earned_credits >= 0 && $earned_credits <= $freshmancredits){
		 			echo "I am classified as a freshman. ";
		 			$credits_needed = $freshmancredits - $earned_credits;
		 			echo " I need " . $credits_needed . " credits to become a sophomore." ;
		 		}
		 		elseif ($earned_credits > $freshmancredits && $earned_credits <= $sophomorecredits) {
		 			echo "I am classified as a sophomore. ";
		 			$credits_needed = $sophomorecredits - $earned_credits;
		 			echo " I need " . $credits_needed . " credits to become a junior." ;
		 		}
		 		elseif ($earned_credits > $sophomorecredits && $earned_credits <= $juniorcredits) {
		 			echo "I am classified as a junior. ";
		 			$credits_needed = $juniorcredits - $earned_credits;
		 			echo " I need " . $credits_needed . " credits to become a senior." ;
		 		}
		 		elseif ($earned_credits > $juniorcredits && $earned_credits <= $seniorcredits) {
		 			echo "I am classified as a senior. ";
		 			$credits_needed = $seniorcredits - $earned_credits;
		 			echo " I need " . $credits_needed . " credits to graduate." ;
		 		}
		  ?>
	

	</section>
</body>

</html>