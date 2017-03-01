<?php
ini_set('display_errors', 1);
error_reporting(~0);
// Config file
include_once 'INC/Config.php';

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

/* Hide product name columnin mobile */
/*th.item-name,
td.item-name { display: none; }*/

.headerRow {
	display: none;
}

/* Give each row to wrap on to the next line*/
td { display: inline-block; }

/*Push the "Add" & "Remove" to wrap*/
td.item-total,
td.item-quantity { padding: 0 9.5%; }

td.item-increment,
td.item-decrement { 
	width: 25%;
	text-align: center;
}

td.item-increment {
    margin-left: 35%;
}

td.item-image,
td.item-total,
td.item-quantity,
td.item-increment,
td.item-decrement,



</style>


















<div class="container">
	        <div class="simpleCart_items"></div>
</div>








<div class="item">
<div class="simpleCart_shelfItem">
                                 <h2 class="item_name">Purple PHP Shirt</h2>
                                  <img alt="image" src="http://placehold.it/100x100" class="item_image"/>
                                   
                                 <p><span class="item_price">£3.99</span>
                                 <input class="item_add" type="button"  href="javascript:;" value="Order Now" ></p>
                                 
</div>
</div>

<div class="item">
<div class="simpleCart_shelfItem">
                                 <h2 class="item_name">Red PHP Shirt</h2>
                                 <img src="http://placehold.it/320x150" class="item_image"/>
                                   
                                 <p><span class="item_price">£3.99</span>
                                 <input class="item_add" type="button"  href="javascript:;" value="Order Now" ></p>
                                 
</div>
</div>

 <!-- 
<div id="wrap">
        <span class="simpleCart_items">
         
        </span> </br>
       <p>Sub total (VAT included) :</p><p class="simpleCart_grandTotal"></p>
        <input class="simpleCart_checkout" type="button"  href="javascript:;" value="Checkout">check out-->
<!-- <input class="simpleCart_empty" type="button"  href="javascript:;" value="empty cart"><  
</div>-->


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