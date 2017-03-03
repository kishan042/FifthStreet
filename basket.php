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

/*.headerRow {
	display: none;
}*/

/* Give each row to wrap on to the next line*/
/*td { display: inline-block; 
	padding: 0 10%;
}
*/
/*Center the cart */
/*.simpleCart_items {
	display: flex;
    align-items: flex-start;
    justify-content: flex-start;
}*/

/*Set the width of the cart*/
/*table {
	width: 100%;
}

td.item-name,
td.item-total,
td.item-quantity {
	display: inline-block;
	width: 25%;
}

td.item-name {
	width: 50%;
	padding: 0;
	text-align: center;
}

td.item-quantity { padding: 0; }

td.item-increment,
td.item-decrement { 
	width: 50%;
	margin-top: 10px;
	text-align: center;
}

td.item-image {
	margin-bottom: 15px;
}*/


td.item-image,
td.item-name,
td.item-total,
td.item-quantity,
td.item-increment,
td.item-decrement,


</style>


















<div class="container">
	        <div class="simpleCart_items"></div>
</div>








<!-- <div class="item mt-200">
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