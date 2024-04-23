<?php 

	// Include the database connection script
	require 'includes/database-connection.php';

	// Include script to generate a star rating
	require 'includes/starRating.php';


	/*
	   TO-DO: Retrieve the value of the 'sign' parameter from the URL query string
			  (i.e., ../horoscope.php?sign=Pisces). Make sure to call this variable $sign!

			  Write SQL query to retrieve ALL info on the zodiac sign based on sign parameter from the URL query string
	 		  Execute the SQL query using the pdo function and fetch the result
	 */



	$sign = $_GET['camera'];


	$sql = "SELECT * 
			FROM picture 
			WHERE name= :camera";
	
	$pictures = pdo($pdo, $sql, ['camera' => $camera])->fetch();



	
	// Check if the cookie 'details_' . $sign is not set
	if (!isset($_COOKIE['details_' . $camera])) {

		// SQL query to select a random horoscope
		$sql2 = "SELECT * 
			FROM picture 
			ORDER BY RAND() LIMIT 1";

		// Execute the query and fetch the result
		$details = pdo($pdo, $sql2)->fetch();
		
		// Serialize the details and set it as a cookie
		$serializedDetails = serialize($details);
		setcookie('details_' . $sign, $serializedDetails, time() + 60 * 60 * 24);
	}

	else 
	{
		// If the cookie 'details_' . $sign is set, unserialize it to retrieve the details
		$details = unserialize($_COOKIE['details_' . $sign]);
	}

?>

<!-- 
	TO DO: Fill in ALL the placeholders for this zodiac sign and horoscope from the database
-->

<div id="content" class="animate-bottom">
	<div id="horoscope-content">

	    <div class="horoscope-info">
	        <div class="horoscope-header">
	        	<!-- Display image of zodiac with its name as alt text -->
	            <img src="<?= $camera['imgSrc'] ?>" alt="<?= $camera['name'] ?>">

	            <!-- Display name of zodiac sign -->
	            <h2><?= $camera['name'] ?></h2>

	            <!-- Display location of picture -->
	            <p><?= $camera['location'] ?></p>
	        </div>

	    <hr />
	</div>			
</div>


