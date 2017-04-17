<?php
// Config file
include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "My Profile ";
		// Meta description
		$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";
		
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
		$profile = "#"; 
		$basket = BASKET; 

		include (ROOT_PATH . 'INC/Navbar.php'); 


// Hero-half-plain
		// copy for H1
		$h1 = "MY PROFILE";

		//Copy for description
		$description = "No need to sign-up for accessing our three ultimate experiences below.";

		include (ROOT_PATH . 'INC/Hero-half-plain.php'); 


// Blocks-three-plain grid
		// Background colour class for block container
		$BlockBG = " ";

		// Image 1 URL 
		$Blocks_3_IMG_1 = $img . "lifestyle/wardrobe-wishlist-heart-with-hands.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_1 = "Add to your wishlist";
		// Image 1 product description
		$Blocks_3_Description_1 = "Add products to your wishlist in-store or online, while being inspired.";

		// Image 2 URL 
		$Blocks_3_IMG_2 = $img . "lifestyle/wardrobe-souvenirs-sun-flower-2.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_2 = "Collect souvenirs";
		// Image 1 product description
		$Blocks_3_Description_2 = "Gather souvenirs as you engage and experience different brands.";

		// Image 3 URL 
		$Blocks_3_IMG_3 = $img . "lifestyle/wardrobe-receipts-cloths-on-hanger.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_3 = "Return or exchange";
		// Image 1 product description
		$Blocks_3_Description_3 = "View products bought and exchange them at your will.";


		include (ROOT_PATH . 'INC/Blocks-three-plain.php');

// Spacing	
		// Add a class to hide the seperation
		$hide = "";

		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// // Blocks-two-left-compact
// 		$BlockBG = "bg-gray-lightest";
// 		// Title
// 		$BlockTitle = "COMING SOON";
// 		// Copy
// 		$BlockText = "Request early access to sync your different devices, so you never lose your wishlist & souvenirs, across mobile, tablet and desktop.";
// 		// type 'hide' to remove the button
// 		$hideCTA = " ";
// 		// Link for CTA
// 		$BlockLink = "#";
// 		// CTA copy
// 		$BlockCTA = "PRE-REGISTER";
// 		// Image URL
// 		$BlockIMG = "https://images.unsplash.com/photo-1477346611705-65d1883cee1e?dpr=2&auto=format&fit=crop&w=1500&h=1001&q=80&cs=tinysrgb&crop=";

// 		include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');


// Blocks-two-left-compact
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "COMING SOON";
		// Copy
		$BlockText = "Get access to sync your different devices, so you never lose your wishlist & souvenirs, across mobile, tablet and desktop.";
		// type 'hide' to remove the button
		$hideCTA = "hide";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "PRE-REGISTER";
		// Image URL
		$BlockIMG = $img . "lifestyle/coming-soon.jpg";

		include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');


// Spacing	
		// Add a class to hide the seperation
		$hide = " ";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');



?>
<!-- <div class="container-smal">
    <div class="row form-flex-center">
        <form method="post" class="form-flex-center" action="wardrobe/Ajax-test7.php">

                <div class="col-xs-12 col-sm-8 col-lg-5 form-group">
                    <input type="text" name="first-name" id="inputName" placeholder="FIRST NAME" pattern="([A-z0-9À-ž]){2,}" required>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-5 mt-50 form-group">
                    <input type="text" name="second-name" id="inputName" placeholder="SECOND NAME" pattern="([A-z0-9À-ž]){2,}" required>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-5 mt-50 form-group">
                    <input type="email" name="email" id="inputEmail" placeholder="EMAIL ADDRESS" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="col-xs-12 mt-50">
                    <button type="submit" class="tertiary-btn-small">SEND</button>
                </div>

        </form>
    </div>
</div> -->
<?php 


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-xs-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer

		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = "";

		// Bread crumbs for the current page
		$CurrentPage = "My Profile";

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php'); 

?> 