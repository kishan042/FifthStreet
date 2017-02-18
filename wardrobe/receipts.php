<?php
// Config file
include_once '../INC/Config.php';

// DB - Model
include(ROOT_PATH . "INC/DB/model.php");
$recent = get_all_products();

// Header
		// Title tag
		$Title = "My Receipts";

		// Meta description
		$Description = "Fill text";

		// CSS path
		$CSSPath = BASE_URL . "CSS/Styles.css";

		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');


// Navbar
		// Links to other pages
		$men =  BASE_URL . MEN;
		$women = BASE_URL . WOMEN;
		$brands = BASE_URL . BRANDS;
		$about = BASE_URL . ABOUT;
		$trending = BASE_URL . TRENDING;
		$offers = BASE_URL . OFFERS;
		$wardrobe = BASE_URL . WARDROBE;
		$search = BASE_URL . SEARCH;
		$profile = BASE_URL . PROFILE;
		$basket = BASE_URL . BASKET;

		// Type "option-active" inside, to make option active
		$ActiveTrending = "";
		$ActiveOffers = "";
		$ActiveWardrobe = "option-active";

		include (ROOT_PATH . 'INC/Navbar.php');


// Hero-half-plain
		// copy for H1
		$h1 = "MY RECIEPTS";

		//Copy for description
		$description = "No barriers between the physical and digital world anymore. For Android users, you can use your phone to tap on products to save them to your wardrobe or find out more information.";

		include (ROOT_PATH . 'INC/Hero-half-plain.php');



// Spacing  
        // Add a class to hide the seperation
        $hide = "";
        
        //include (ROOT_PATH . 'INC/Spacing-mt-100.php');
?>
<div class="container">
    <ul class="products">
        <?php
            foreach(array_reverse($recent) as $product) {
                include(ROOT_PATH . "INC/DB/product-block.php");
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
		$hide = " ";

		// Bread crunb for the previous page 
		$PreviousPage = "Wardrobe";

		// Bread crumbs for the current page
		$CurrentPage = "My Reciepts";		

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php');

?> 