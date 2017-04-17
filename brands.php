<?php
// Config file
include_once 'INC/DB/Config.php';

// DB - Model
    include(ROOT_PATH . "INC/DB/model.php");
    // Call function to get the latest / trending products
    $all_brands = get_all_brands();

// Header
		// Title tag
		$Title = "Brands ";
		
		// Meta description
		$Description = "Fill text";

		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');


// Navbar
		// Links to other pages	
		$men = MEN; 
		$women = WOMEN; 
		$brands = "#"; 
		$about = ABOUT; 
		$trending = TRENDING; 
		$offers = OFFERS; 
		$wardrobe = WARDROBE; 
		$search = SEARCH; 
		$profile = PROFILE; 
		$basket = BASKET; 

		include (ROOT_PATH . 'INC/Navbar.php'); 



// Spacing  
        // Add a class to hide the seperation
        $hide = "hidden-md-up";
        
        include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Hero-half-plain
		// copy for H1
		$h1 = "TOP BRANDS";

		//Copy for description
		$description = "Discover new brands every day, who are offering the best products without compromising on the quality.";

		include (ROOT_PATH . 'INC/Hero-half-plain.php'); 

// // Spacing  
//         // Add a class to hide the seperation
//         $hide = "hidden-md-up";
        
//         include (ROOT_PATH . 'INC/Spacing-mt-50.php');

?>
<div class="container">
    <ul class="products block">
            <?php 
                foreach($all_brands as $brand) {
                    include(ROOT_PATH . "INC/DB/brands-block.php");
                }
            ?>
    </ul>
</div>
<?php

// Spacing	
		// Add a class to hide the seperation
		$hide = "";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer
		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = " ";

		// Bread crumbs for the current page
		$CurrentPage = "Brands";		

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php'); 

?> 