<?php
// Config file
include_once '../../../INC/DB/Config.php';

// Header
		// Title tag
		$Title = "Horizon ";
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
        $url = $img . "souvenirs/collection/1.jpeg"; 
        // Amount of tint on image
        $tint = "tint-0";
        // copy for H1
        $h1 = " ";

        include (ROOT_PATH . 'INC/Hero-half.php');


// Blocks-two-compact-extend
		// Background colour class for text
		$BlockBG = "bg-white";
		// Title
		$BlockTitle = "HORIZON <br> COLLECTION";
		// Copy
		$BlockText = "Wander across a range of brand collections and save any product which inspires you. Why stop there, you can even go to any physical store.";
		// type 'hide' to remove the button
		$hideCTA = "hide";
		// Link for CTA
		$BlockLink = "wardrobe.php";
		// CTA copy
		$BlockCTA = "View all items";
		// Image 1 URL 
		$BlockIMG_1 = $img . "men/Featured-1.jpg"; 
		// Image 2 URL 
		$BlockIMG_2 = $img . "men/Featured-2.jpg"; 
		// Image 3 URL 
		$BlockIMG_3 = $img . "men/Featured-3.jpg"; 

		include (ROOT_PATH . 'INC/Blocks-two-compact-extend.php');


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Blocks grid
		// Title
		$Block_Grid_Title = "Horizon Collection";
		// ID for the container
		$Block_Grid_ID = "collection";
	    // Image 1 Link 
		$Block_Grid_1_Link = BASE_URL . "product.php?id=1201";
		// Image 9 URL
		$Block_Grid_IMG_1 = $img . "men/collection-shirt.jpg";
		// Image 1 product title
		$product_Title_1 = "Basics T-Shirt";
		// Image 1 product description
		$product_description_1 = "White short-sleeved basics T-shirt, made of high-quality cotton.";


	    // Image 2 Link 
		$Block_Grid_2_Link = BASE_URL . "product.php?id=1202";
		// Image 9 URL
		$Block_Grid_IMG_2 = $img . "men/collection-trouser.jpg";
		// Image 1 product title
		$product_Title_2 = "Khaki Trousers";
		// Image 1 product description
		$product_description_2 = "Brown khaki trousers, made of high-quality cotton.";


		// Image 3 URL
		$Block_Grid_IMG_3 = $img . "men/collection-pack-lifestyle.jpg";;


	    // Image 4 Link 
		$Block_Grid_4_Link = BASE_URL . "product.php?id=1203";
		// Image 9 URL
		$Block_Grid_IMG_4 = $img . "men/collection-glasses.jpg";
		// Image 1 product title
		$product_Title_4 = "Horizon Sunglasses";
		// Image 1 product description
		$product_description_4 = "Comfortable and easy to wear sunglasses for all occasions.";


	    // Image 5 Link 
		$Block_Grid_5_Link = BASE_URL . "product.php?id=1204";
		// Image 9 URL
		$Block_Grid_IMG_5 = $img . "men/collection-belt.jpg";
		// Image 1 product title
		$product_Title_5 = "Leather Belt";
		// Image 1 product description
		$product_description_5 = "Brand new brown belt which is made of 100% pure leather.";


	    // Image 6 Link 
		$Block_Grid_6_Link = BASE_URL . "product.php?id=1205";
		// Image 9 URL
		$Block_Grid_IMG_6 = $img . "men/collection-boots.jpg";
		// Image 1 product title
		$product_Title_6 = "Brown Boots";
		// Image 1 product description
		$product_description_6 = "Leather brown boots, made for every occasion.";


	    // Image 7 Link 
		$Block_Grid_7_Link = BASE_URL . "product.php?id=1206";
		// Image 9 URL
		$Block_Grid_IMG_7 = $img . "men/collection-phone-case.jpg";
		// Image 1 product title
		$product_Title_7 = "iPhone 6 case";
		// Image 1 product description
		$product_description_7 = "Brand new brown iPhone 6 case. Only 500 were handcrafted.";


	    // Image 8 Link 
		$Block_Grid_8_Link = BASE_URL . "product.php?id=1207";
		// Image 9 URL
		$Block_Grid_IMG_8 = $img . "men/collection-wallet.jpg";
		// Image 1 product title
		$product_Title_8 = "Horizon Wallet";
		// Image 1 product description
		$product_description_8 = "Dark brown leather wallet. Only 500 were handcrafted.";


	    // Image 9 Link 
		$Block_Grid_9_Link = BASE_URL . "product.php?id=1208";
		// Image 9 URL
		$Block_Grid_IMG_9 = $img . "men/collection-watch.jpg";
		// Image 1 product title
		$product_Title_9 = "Horizon Watch";
		// Image 1 product description
		$product_description_9 = "Dark brown leather watch. Only 500 were handcrafted.";


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
		$Blocks_3_IMG_Link_1 = BASE_URL . "product.php?id=1205";
		// Image 1 URL 
		$Blocks_3_IMG_1 = $img . "men/footwear-shoe-2.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_1 = "Brown Boots";
		// Image 1 product description
		$Blocks_3_Description_1 = "Leather brown lace-up boots, <br> made for every occasion.";


		// Image 1 Link
		$Blocks_3_IMG_Link_2 = BASE_URL . "product.php?id=1210";
		// Image 2 URL 
		$Blocks_3_IMG_2 = $img . "men/footwear-shoe-1.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_2 = "Aztec lace-ups";
		// Image 1 product description
		$Blocks_3_Description_2 = "New Brown lace-up shoes, <br> made of 100% high-quality leather.";


		// Image 1 Link
		$Blocks_3_IMG_Link_3 = BASE_URL . "product.php?id=1213";
		// Image 3 URL 
		$Blocks_3_IMG_3 = $img . "men/footwear-shoe-3.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_3 = "Converse";
		// Image 1 product description
		$Blocks_3_Description_3 = "Converses with laces, <br> perfect for while working hard and playing hard.";


		include (ROOT_PATH . 'INC/Blocks-three.php');


// Blocks-four grid
		// Title
		$Blocks_4_Title = "Latest Accessories";
		// ID for the container
		$Blocks_4_ID = "accessories";

		// Image 1 Link
		$Blocks_4_IMG_Link_1 = BASE_URL . "product.php?id=1209";
		// Image 1 URL 
		$Blocks_4_IMG_1 = $img . "men/accessories-hat.jpg";
		// Image 1 product title
		$Blocks_4_Product_Title_1 = "Godfather Hat";
		// Image 1 product description
		$Blocks_4_Description_1 = "Brand new off-white Godfather crown hat, made of 100% high-quality wool.";


		// Image 1 Link
		$Blocks_4_IMG_Link_2 = BASE_URL . "product.php?id=1211";
		// Image 2 URL 
		$Blocks_4_IMG_2 = $img . "men/accessories-glasses.jpg";
		// Image 1 product title
		$Blocks_4_Product_Title_2 = "Blackwood Glasses";
		// Image 1 product description
		$Blocks_4_Description_2 = "Blackwood glasses, made of high-quality wood, to look great for every occasion.";


		// Image 1 Link
		$Blocks_4_IMG_Link_3 = BASE_URL . "product.php?id=1212";
		// Image 3 URL 
		$Blocks_4_IMG_3 = $img . "men/accessories-gloves.jpg";
		// Image 1 product title
		$Blocks_4_Product_Title_3 = "Leather Gloves";
		// Image 1 product description
		$Blocks_4_Description_3 = "Dark red leather gloves, made of 100% pure leather, to keep your hands warm.";


		// Image 1 Link
		$Blocks_4_IMG_Link_4 = BASE_URL . "product.php?id=1214";
		// Image 4 URL 
		$Blocks_4_IMG_4 = $img . "men/accessories-bag.jpg";
		// Image 1 product title
		$Blocks_4_Product_Title_4 = "Leather Shoulder Bag";
		// Image 1 product description
		$Blocks_4_Description_4 = "Shoulder bag, made of high-quality leather, perfect for any professional use.";

		include (ROOT_PATH . 'INC/Blocks-four.php');


// Footer
        // If current pages does not exist then add the 
        $hide = " ";

        // Link for previous page
        $PreviousPage_Link = "http://thefifthstreet.com/wardrobe/souvenirs.php";

        // Bread crunb for the previous page 
        $PreviousPage = "My Souvenirs";

        // Bread crumbs for the current page
        $CurrentPage = "Horizon";

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php'); 