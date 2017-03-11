<?php
ini_set('display_errors', 1);
error_reporting(~0);
// Config file
include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "Test 4 ";
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
		$basket = BASKET; 

		include (ROOT_PATH . 'INC/Navbar.php'); 
?>













<!-- <div class="item mt-200">
<div class="simpleCart_shelfItem">
                                 <h2 class="item_name">Purple PHP Shirt</h2>
                                  <img alt="image" src="IMG/shirts/shirt-101.jpg" class="item_image img-fluid"/>
                                   
                                 <p><span class="item_price">£3.99</span>
                                 <input class="item_add" type="button"  href="javascript:;" value="Order Now" ></p>
                                 <span class="item_size product-size">Size:6</span>                  
</div>
</div> -->
<!-- 

<div class="item mt-200">
<div class="simpleCart_shelfItem">
                                 <h2 class="item_name">Purple PHP Shirt</h2>
                                  <img alt="image" src="IMG/shirts/shirt-101.jpg" class="item_image img-fluid"/>
                                   
                                 <p><span class="item_price">£3.99</span>
                                 <input class="item_add" type="button"  href="javascript:;" value="Order Now" ></p>
                                 <span class="item_size product-size">Size:6</span>                  
</div>
</div>





<div class="item mt-200">
<div class="simpleCart_shelfItem">
                                 <h2 class="item_name">RED CSS Shirt</h2>
                                  <img alt="image" src="IMG/shirts/shirt-118.jpg" class="item_image img-fluid"/>
                                   
                                 <p><span class="item_price">£3.99</span>
                                 <input class="item_add" type="button"  href="javascript:;" value="Order Now" ></p>
                                 <span class="item_size product-size">Size:6</span>

                                 
</div>
</div>
 -->


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