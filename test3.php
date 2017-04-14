<?php
ini_set('display_errors', 1);
error_reporting(~0);
// Config file
include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "My Basket ";
		// Meta description
		$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";

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
		$offers = OFFERS; 
		$wardrobe = WARDROBE; 
		$search = SEARCH; 
		$profile = PROFILE; 
		$basket = "#"; 

		include (ROOT_PATH . 'INC/Navbar.php'); 
?>

<style>
	.style { 
		display: inline-block;
		margin: 25px;
	 }
</style>

<li class="style">
<p>102</p>
<button class="add-to-wishlist" id="102">+</button>
</li>

<li class="style">
<p>118</p>
<button class="add-to-wishlist" id="118">+</button>
</li>

<li class="style">
<p>102</p>
<button class="remove-from-wishlist" id="102">-</button>
</li>

<li class="style">
<p>118</p>
<button class="remove-from-wishlist" id="118">-</button>
</li>

<li class="style">
<p>Men</p>
<button class="add-souvenir" id="118">+ Souvenir +</button>
</li>

<li class="style">
<p>Men</p>
<button class="remove-souvenir" id="118">- Souvenir -</button>
</li>

<?php

// Spacing  
        // Add a class to hide the seperation
        $hide = "";
        
        include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer
        // If current pages does not exist then add the 
        $hide = "hidden-xs-up";

        // Bread crunb for the previous page 
        $PreviousPage = "";

        // Bread crumbs for the current page
        $CurrentPage = "Trending";
        

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php');

?> 