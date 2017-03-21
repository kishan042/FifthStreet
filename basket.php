<?php
ini_set('display_errors', 1);
error_reporting(~0);
// Config file
include_once 'INC/DB/Config.php';

// DB - Model
    include(ROOT_PATH . "INC/DB/model.php");
    // Function to get the 4 recent products in the database
    $recent = get_recent_products(4);

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

// Hero-half-plain
		// copy for H1
		$h1 = "MY BASKET";

		//Copy for description
		$description = "No barriers between the physical and digital world anymore. For Android users, you can use your phone to tap on products to save them to your wardrobe or find out more information.";

		include (ROOT_PATH . 'INC/Hero-half-plain.php'); 
?>




<div class="container items-added">
	        <div class="simpleCart_items"></div> 
        	<div class="row checkout bg-gray-lightest">
				<div class="sub-total col-md-9 col-lg-10 txt-xs-center txt-md-left">
					<h3>Sub total : <span class="simpleCart_grandTotal"></span></h3>
				</div>
				<div class="col-md-1">
					<!-- Add 't' at the end of checkout -->
					<a href="thank-you.php">
					<button class="tertiary-btn-small simpleCart_checkou checkout-btn" 
							type="button"  
							href="javascript:;" 
							value="Checkout">
					CHECKOUT</button>
					</a>
				</div>
			</div>
</div>

<div class="container">     
    <h2 class="txt-xs-center my-3 rid">Latest product&rsquo;s</h2>
    <ul class="products block">
        <?php
            foreach($recent as $product) {
                include(ROOT_PATH . "INC/DB/products-block.php");
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
        $PreviousPage = "";

        // Bread crumbs for the current page
        $CurrentPage = "My basket";
        

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php');
?>