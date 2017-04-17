<?php
// Config file
include_once '../../../INC/DB/Config.php';

// Header
		// Title tag
		$Title = "Plaza ";
		// Meta description
		$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";
		
		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');

// Navbar
		// Links to other pages	
        $men = BASE_URL . MEN; 
        $women = BASE_URL . WOMEN; 
        $brands = BASE_URL . BRANDS; 
        $about = BASE_URL . ABOUT; 
        $trending = BASE_URL . TRENDING; 
        $offers = BASE_URL . OFFERS; 
        $wardrobe = BASE_URL . WARDROBE; 
        $search = BASE_URL . SEARCH; 
        $profile = BASE_URL . PROFILE; 
        $basket = BASE_URL . BASKET;  

		include (ROOT_PATH . 'INC/Navbar.php'); 

// Hero-half
        //IMG URL 
        $url = $img . "souvenirs/collection/plaza-collection.jpg"; 
        // Amount of tint on image
        $tint = "tint-0";
        // copy for H1
        $h1 = " ";

        include (ROOT_PATH . 'INC/Hero-half.php');


// Blocks-two-compact-extend
		// Background colour class for text
		$BlockBG = "bg-white";
		// Title
		$BlockTitle = "PLAZA <br> COLLECTION";
		// Copy
		$BlockText = "Wander across a range of brand collections and save any product which inspires you. Why stop there, you can even go to any physical store.";
		// type 'hide' to remove the button
		$hideCTA = "hide";
		// Link for CTA
		$BlockLink = "wardrobe.php";
		// CTA copy
		$BlockCTA = "View all items";
		// Image 1 URL 
		$BlockIMG_1 = $img . "women/Featured-1.jpg"; 
		// Image 2 URL 
		$BlockIMG_2 = $img . "women/Featured-3.jpg"; 
		// Image 3 URL 
		$BlockIMG_3 = $img . "women/Featured-2.jpg";  

		include (ROOT_PATH . 'INC/Blocks-two-compact-extend.php');


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Blocks grid
		// Title
		$Block_Grid_Title = "Plaza Collection";
		// ID for the container
		$Block_Grid_ID = "collection";
	    // Image 1 Link 
		$Block_Grid_1_Link = BASE_URL . "product.php?id=1242";
		// Image 9 URL
		$Block_Grid_IMG_1 = $img . "women/collection-long-dress.jpg";
		// Image 1 product title
		$product_Title_1 = "Side Cut Maxi Dress";
		// Image 1 product description
		$product_description_1 = "light aqua side cute maxi dress, perfect for any professional or casual use.";


	    // Image 2 Link 
		$Block_Grid_2_Link = BASE_URL . "product.php?id=1245";
		// Image 9 URL
		$Block_Grid_IMG_2 = $img . "women/collection-shorts.jpg";
		// Image 1 product title
		$product_Title_2 = "Waist Shorts";
		// Image 1 product description
		$product_description_2 = "Cream waist shorts perfect addition to any wardrobe.";


		// Image 3 URL
		$Block_Grid_IMG_3 = $img . "women/collection-pack-lifestyle.jpg";;


	    // Image 4 Link 
		$Block_Grid_4_Link = BASE_URL . "product.php?id=1237";
		// Image 9 URL
		$Block_Grid_IMG_4 = $img . "women/collection-hat.jpg";
		// Image 1 product title
		$product_Title_4 = "Peach Bucket Hat";
		// Image 1 product description
		$product_description_4 = "Peach bucket hat, which compliment you at every special occasion.";


	    // Image 5 Link 
		$Block_Grid_5_Link = BASE_URL . "product.php?id=1239";
		// Image 9 URL
		$Block_Grid_IMG_5 = $img . "women/collection-scarf.jpg";
		// Image 1 product title
		$product_Title_5 = "Cashmere Scarf";
		// Image 1 product description
		$product_description_5 = "Brand new multi-coloured cashmere scarf will have you looking great.";


	    // Image 6 Link 
		$Block_Grid_6_Link = BASE_URL . "product.php?id=1241";
		// Image 9 URL
		$Block_Grid_IMG_6 = $img . "women/collection-heels.jpg";
		// Image 1 product title
		$product_Title_6 = "Plaza Pumps";
		// Image 1 product description
		$product_description_6 = "Dark aqua round-toe pump heels, great for any professional or casual use.";


	    // Image 7 Link 
		$Block_Grid_7_Link = BASE_URL . "product.php?id=1232";
		// Image 9 URL
		$Block_Grid_IMG_7 = $img . "women/collection-purse.jpg";
		// Image 1 product title
		$product_Title_7 = "Peach Purse";
		// Image 1 product description
		$product_description_7 = "Peach purse, always ready to compliment you any time.";


	    // Image 8 Link 
		$Block_Grid_8_Link = BASE_URL . "product.php?id=1233";
		// Image 9 URL
		$Block_Grid_IMG_8 = $img . "women/collection-braclet.jpg";
		// Image 1 product title
		$product_Title_8 = "Pearl Bracelet";
		// Image 1 product description
		$product_description_8 = "Pearl bracelet, perfect accessory for the Plaza collection.";


	    // Image 9 Link 
		$Block_Grid_9_Link = BASE_URL . "product.php?id=1231";
		// Image 9 URL
		$Block_Grid_IMG_9 = $img . "women/collection-belt.jpg";
		// Image 1 product title
		$product_Title_9 = "Peach Belt";
		// Image 1 product description
		$product_description_9 = "Peach belt, perfect for any professional or casual use.";


		include (ROOT_PATH . 'INC/Blocks-grid.php');



// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');



// Blocks-three grid
		// Title
		$Blocks_3_Title = "Latest Footwear";
		// ID for the container
		$Blocks_3_ID = "footwear";
		// Background colour class for block container
		$BlockBG = "bg-gray-lightest";

		// Image 1 Link
		$Blocks_3_IMG_Link_1 = BASE_URL . "product.php?id=1217";
		// Image 1 URL 
		$Blocks_3_IMG_1 = $img . "women/footwear-shoe-2.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_1 = "Peep Toe";
		// Image 1 product description
		$Blocks_3_Description_1 = "Pink and black peep-toe heels, <br> perfect for any professional or casual use";


		// Image 1 Link
		$Blocks_3_IMG_Link_2 = BASE_URL . "product.php?id=1216";
		// Image 2 URL 
		$Blocks_3_IMG_2 = $img . "women/footwear-shoe-1.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_2 = "Platform";
		// Image 1 product description
		$Blocks_3_Description_2 = "Dark blue platform heels, <br> made of high-quality fabric, just for you.";


		// Image 1 Link
		$Blocks_3_IMG_Link_3 = BASE_URL . "product.php?id=1230";
		// Image 3 URL 
		$Blocks_3_IMG_3 = $img . "women/footwear-shoe-3.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_3 = "Orange Heels";
		// Image 1 product description
		$Blocks_3_Description_3 = "light orange round-toe heels, <br> great every occasion while stock lasts.";


		include (ROOT_PATH . 'INC/Blocks-three.php');


// Blocks-four grid
		// Title
		$Blocks_4_Title = "Latest Accessories";
		// ID for the container
		$Blocks_4_ID = "accessories";


		// Image 1 Link
		$Blocks_4_IMG_Link_1 = BASE_URL . "product.php?id=1226";
		// Image 1 URL 
		$Blocks_4_IMG_1 = $img . "women/accessories-hat.jpg";
		// Image 1 product title
		$Blocks_4_Product_Title_1 = "Summer Hat";
		// Image 1 product description
		$Blocks_4_Description_1 = "Sun-hat specially made to protect you from the sun.";


		// Image 1 Link
		$Blocks_4_IMG_Link_2 = BASE_URL . "product.php?id=1239";
		// Image 2 URL 
		$Blocks_4_IMG_2 = $img . "women/accessories-scarf.jpg";
		// Image 1 product title
		$Blocks_4_Product_Title_2 = "Cashmere Scarf";
		// Image 1 product description
		$Blocks_4_Description_2 = "Brand new multi-coloured cashmere scarf waiting for you";


		// Image 1 Link
		$Blocks_4_IMG_Link_3 = BASE_URL . "product.php?id=1233";
		// Image 3 URL 
		$Blocks_4_IMG_3 = $img . "women/accessories-bracelet.jpg";
		// Image 1 product title
		$Blocks_4_Product_Title_3 = "Pearl Bracelet";
		// Image 1 product description
		$Blocks_4_Description_3 = "Pearl bracelet, perfect accessory for the Plaza collection.";


		// Image 1 Link
		$Blocks_4_IMG_Link_4 = BASE_URL . "product.php?id=1243";
		// Image 4 URL 
		$Blocks_4_IMG_4 = $img . "women/accessories-purse.jpg";
		// Image 1 product title
		$Blocks_4_Product_Title_4 = "Double Zipper Purse";
		// Image 1 product description
		$Blocks_4_Description_4 = "Gold double zipper purse, made for the Plaza collection.";

		include (ROOT_PATH . 'INC/Blocks-four.php');

// Footer
        // If current pages does not exist then add the 
        $hide = " ";

        // Link for previous page
        $PreviousPage_Link = "http://thefifthstreet.com/wardrobe/souvenirs.php";

        // Bread crunb for the previous page 
        $PreviousPage = "My Souvenirs";

        // Bread crumbs for the current page
        $CurrentPage = "Plaza";

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php'); 