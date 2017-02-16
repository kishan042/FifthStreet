<?php
// Config file
include_once 'INC/Config.php';


// Header
		// Title tag
		$Title = "Home ";
		// Meta description
		$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";

		// CSS path
		$CSSPath = BASE_URL . "CSS/Styles.css";
		
		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');

// // Navbar
// 		// Links to other pages	
// 		$men = MEN; 
// 		$women = WOMEN; 
// 		$brands = BRANDS; 
// 		$about = ABOUT; 
// 		$trending = TRENDING; 
// 		$offers = OFFERS; 
// 		$wardrobe = WARDROBE; 
// 		$search = "#"; 
// 		$profile = PROFILE; 
// 		$basket = BASKET; 

// 		include (ROOT_PATH . 'INC/Navbar.php'); 

// Connect to the database
require (ROOT_PATH . 'INC/database/db-connection.php');

// Spacing	
		// Add a class to hide the seperation
		// $hide = "hidden-xs-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Searching query 

if (isset($_POST['search'])) {
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

	// Try catch block to create a qury to the products table
	try {
		$results = $db->prepare("SELECT * FROM products WHERE name LIKE '%$searchq%'"); 
		$count = mysql_num_rows($results);
		if ($count == 0) {
			$output = 'No search result';
		} else {
			while ($row = mysql_fetch_array($results)) {
				$shirt = $row['name'];

				$output .= '<div>' . $shirt . '</div>':
			}
		}

	} catch (Exception $e) { // catch exception if query fails and then exit
		echo "Data could not be retrived from database.";
		exit;
	}


}

// // Following code to view the query in an array format
// echo "<pre>";
// var_dump($results->fetchAll(PDO::FETCH_ASSOC));
// echo "</pre>";

?>

<!-- <div class="container-small mt-100">
	<form action="search.php" method="post">
		<input type="text" name="search" placeholder="Search"/>
		<input type="submit" value="search"/>	
	</form>
</div>




<?php

// // Footer

// 		// If current pages does not exist then add the 
// 		$hide = "hidden-xs-up";

// 		// Bread crunb for the previous page 
// 		$PreviousPage = "";

// 		// Bread crumbs for the current page
// 		$CurrentPage = "Search";

// 		// JS path
// 		$JSPath = BASE_URL . "JS/jquery.js";

// 		include (ROOT_PATH . 'INC/Footer.php'); 