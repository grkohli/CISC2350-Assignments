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
		$students = array(
			'Rick' => 124,
			'Morty' => 24,
			'Summer' => 48,
			'Beth' => 75,
			'Jerry' => 32,
			'Bird_man' => 97
		);	
	 
	 function get_student_year( $earned_credits) {
	 		$freshmancredits = 30;
			$sophomorecredits = 60;
			$juniorcredits = 92;
			$seniorcredits = 124;
			$classification;

			echo "<p>Credits I Currently Have == $earned_credits</p>"; 
			
		 		if($earned_credits >= 0 && $earned_credits <= $freshmancredits){
		 			$classification = "Freshman";
					echo "Classified as a freshman. ";
					
					return( $classification);
		 		}
		 		elseif ($earned_credits > $freshmancredits && $earned_credits <= $sophomorecredits) {
		 			$classification = "Sophomore";
					echo "Classified as a sophomore. ";
					
					return( $classification);
		 		}
		 		elseif ($earned_credits > $sophomorecredits && $earned_credits <= $juniorcredits) {
		 			$classification = "Junior";
					echo "Classified as a junior. ";
					
					return( $classification);
		 		}
		 		elseif ($earned_credits > $juniorcredits && $earned_credits <= $seniorcredits) {
		 			$classification = "Senior";
					echo "Classified as a senior. ";
					
					return( $classification);
		 		}
		  	
	}

	function get_grad_credits( $earned_credits){
		$total_credits = 124;

		echo "<p>Earned Credits == $earned_credits</p>"; 
		echo "<p>Credits Needed to Graduate== $total_credits</p>";
	
		$credits_needed = $total_credits - $earned_credits;
		
		echo "<p>Remaining Credits Needed to Graduate== $credits_needed</p>"; 
		
		return( $credits_needed);
	}

	function get_next_level( $earned_credits) {
			$freshmancredits = 30;
			$sophomorecredits = 60;
			$juniorcredits = 92;
			$seniorcredits = 124;
			$nextclassification;

			echo "<p>Credits I Currently Have == $earned_credits</p>"; 
			
		 		if($earned_credits >= 0 && $earned_credits <= $freshmancredits){
					$credits_needed = $freshmancredits - $earned_credits;
					$nextclassification = "Sophomore";
		 			echo " Needs " . $credits_needed . " credits to become a sophomore." ;
		 			return( $credits_needed);
		 			return ($nextclassification);
		 		}
		 		elseif ($earned_credits > $freshmancredits && $earned_credits <= $sophomorecredits) {
		 			$credits_needed = $sophomorecredits - $earned_credits;
		 			$nextclassification = "Junior";
		 			echo " Needs " . $credits_needed . " credits to become a junior." ;
		 			return( $credits_needed);
		 			return ($nextclassification);
		 		}
		 		elseif ($earned_credits > $sophomorecredits && $earned_credits <= $juniorcredits) {
		 			$credits_needed = $juniorcredits - $earned_credits;
		 			$nextclassification = "Senior";
		 			echo " Needs " . $credits_needed . " credits to become a senior." ;
		 			return( $credits_needed);
		 			return ($nextclassification);
		 		}
		 		elseif ($earned_credits > $juniorcredits && $earned_credits <= $seniorcredits) {
		 			$credits_needed = $seniorcredits - $earned_credits;
		 			$nextclassification = "Graduate";
		 			echo " Needs " . $credits_needed . " credits to graduate." ;
		 			return( $credits_needed);
		 			return ($nextclassification);
		 		}

	}

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
		<?php  
		$count = 1;
		foreach( $students as $name => $earned_credits) {
			echo "<p>------STUDENT $count:------</p>";
			echo "<p>The student name is $name and he/she earned $earned_credits credits</p>";
			
			get_grad_credits($earned_credits); 
	
			get_student_year($earned_credits); 

			get_next_level($earned_credits);

			$count++;
		}
		
		?>
	</section>


</body>

</html>