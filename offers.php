<?php
ini_set('display_errors', 1);
error_reporting(~0);
// Config file
include_once 'INC/DB/Config.php';

// DB - Model
    include(ROOT_PATH . "INC/DB/model.php");
    // Call function to get the latest / trending products
    $all_offers = get_all_offers();

// Header
		// Title tag
		$Title = "Offers ";
		
		// Meta description
		$Description = "Fill text";

		// CSS path
		$CSSPath = BASE_URL . "CSS/Styles.css";
		
		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');


// Navbar
		// Links to other pages	
		$men = MEN; 
		$women = WOMEN; 
		$brands = BRANDS; 
		$about = ABOUT; 
		$trending = TRENDING; 
		$offers = "#"; 
		$wardrobe = WARDROBE; 
		$search = SEARCH; 
		$profile = PROFILE; 
		$basket = BASKET; 

		// Type "option-active" inside, to make option active
		$ActiveTrending = "";
		$ActiveOffers = "option-active";
		$ActiveWardrobe = "";

		include (ROOT_PATH . 'INC/Navbar.php'); 

// Spacing  
        // Add a class to hide the seperation
        $hide = "hidden-md-up";
        
        include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Hero-half-plain
		// copy for H1
		$h1 = "TODAY'S OFFERS";

		//Copy for description
		$description = "Explore our selection of top offers for Men and Women in one location, from over 20 brands alone.";

		include (ROOT_PATH . 'INC/Hero-half-plain.php'); 


?> 
<div class="container">
    <ul class="products block">
            <?php 
                foreach($all_offers as $offer) {
                    include(ROOT_PATH . "INC/DB/offers-block.php");
                }
            ?>
    </ul>
</div>
<?php

// Spacing	
		// Add a class to hide the seperation
		$hide = "";
		
		include (ROOT_PATH .'INC/Spacing-mt-100.php');


// Footer
		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = " ";

		// Bread crumbs for the current page
		$CurrentPage = "Offers";		

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH .'INC/Footer.php'); 

?> 