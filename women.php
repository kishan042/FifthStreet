<?php
// Config file
include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "Women ";
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
		$women = "#"; 
		$brands = BRANDS; 
		$about = ABOUT; 
		$trending = TRENDING; 
		$offers = OFFERS; 
		$wardrobe = WARDROBE; 
		$search = SEARCH; 
		$profile = PROFILE; 
		$basket = BASKET; 

		include (ROOT_PATH . 'INC/Navbar.php'); 

// Hero-half
        //IMG URL
        $url = "https://images.unsplash.com/photo-1483181957632-8bda974cbc91?dpr=2&auto=format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop="; 
        // Amount of tint on image
        $tint = "tint-1";
        // copy for H1
        $h1 = " ";

        include (ROOT_PATH . 'INC/Hero-half.php');


// Blocks-two-compact-extend
		// Background colour class for text
		$BlockBG = "bg-white";
		// Title
		$BlockTitle = "FOR WOMEN";
		// Copy
		$BlockText = "Wander across a range of brand collections and save any product which inspires you. Why stop there, you can even go to any physical store.";
		// type 'hide' to remove the button
		$hideCTA = "";
		// Link for CTA
		$BlockLink = "wardrobe.php";
		// CTA copy
		$BlockCTA = "View all items";
		// Image 1 URL 
		$BlockIMG_1 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";
		// Image 2 URL 
		$BlockIMG_2 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";
		// Image 3 URL 
		$BlockIMG_3 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

		include (ROOT_PATH . 'INC/Blocks-two-compact-extend.php');


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Blocks grid
		// Title
		$Block_Grid_Title = "Latest Clothing";

	// Image 1 URL 
		$Block_Grid_IMG_1 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&1";
		// Image 1 product title
		$product_Title_1 = "Product Title";
		// Image 1 product description
		$product_description_1 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 2 URL 
		$Block_Grid_IMG_2 = "https://images.unsplash.com/photo-1467320424268-f91a16cf7c77?dpr=2&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=";
		// Image 1 product title
		$product_Title_2 = "Product Title";
		// Image 1 product description
		$product_description_2 = "lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 3 URL 
		$Block_Grid_IMG_3 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&1";
		// Image 1 product title
		$product_Title_3 = "Product Title";
		// Image 1 product description
		$product_description_3 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 4 URL 
		$Block_Grid_IMG_4 = "https://images.unsplash.com/photo-1467320424268-f91a16cf7c77?dpr=2&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=";
		// Image 1 product title
		$product_Title_4 = "Product Title";
		// Image 1 product description
		$product_description_4 = "lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 5 URL 
		$Block_Grid_IMG_5 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&1";
		// Image 1 product title
		$product_Title_5 = "Product Title";
		// Image 1 product description
		$product_description_5 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 6 URL 
		$Block_Grid_IMG_6 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&1";
		// Image 1 product title
		$product_Title_6 = "Product Title";
		// Image 1 product description
		$product_description_6 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 7 URL 
		$Block_Grid_IMG_7 = "https://images.unsplash.com/photo-1467320424268-f91a16cf7c77?dpr=2&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=";
		// Image 1 product title
		$product_Title_7 = "Product Title";
		// Image 1 product description
		$product_description_7 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 8 URL 
		$Block_Grid_IMG_8 = "https://images.unsplash.com/photo-1467320424268-f91a16cf7c77?dpr=2&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=";
		// Image 1 product title
		$product_Title_8 = "Product Title";
		// Image 1 product description
		$product_description_8 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 9 URL 
		$Block_Grid_IMG_9 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&1";
		// Image 1 product title
		$product_Title_9 = "Product Title";
		// Image 1 product description
		$product_description_9 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


		include (ROOT_PATH . 'INC/Blocks-grid.php');



// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');



// Blocks-three grid
		// Title
		$Blocks_3_Title = "Latest Footwear";
		// Background colour class for block container
		$BlockBG = "bg-gray-lightest";

	// Image 1 URL 
		$Blocks_3_IMG_1 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&1";
		// Image 1 product title
		$Blocks_3_Product_Title_1 = "Product Title";
		// Image 1 product description
		$Blocks_3_Description_1 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 2 URL 
		$Blocks_3_IMG_2 = "https://images.unsplash.com/photo-1467320424268-f91a16cf7c77?dpr=2&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=";
		// Image 1 product title
		$Blocks_3_Product_Title_2 = "Product Title";
		// Image 1 product description
		$Blocks_3_Description_2 = "orem ipsum dolor sit amet, consectetur adipisicinag elit. Cupiditate, numquam.";


	// Image 3 URL 
		$Blocks_3_IMG_3 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&1";
		// Image 1 product title
		$Blocks_3_Product_Title_3 = "Product Title";
		// Image 1 product description
		$Blocks_3_Description_3 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


		include (ROOT_PATH . 'INC/Blocks-three.php');



// Blocks-four grid
		// Title
		$Blocks_4_Title = "Latest Accessories";

	// Image 1 URL 
		$Blocks_4_IMG_1 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&1";
		// Image 1 product title
		$Blocks_4_Product_Title_1 = "Product Title";
		// Image 1 product description
		$Blocks_4_Description_1 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 2 URL 
		$Blocks_4_IMG_2 = "https://images.unsplash.com/photo-1467320424268-f91a16cf7c77?dpr=2&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=";
		// Image 1 product title
		$Blocks_4_Product_Title_2 = "Product Title";
		// Image 1 product description
		$Blocks_4_Description_2 = "orem ipsum dolor sit amet, consectetur adipisicinag elit. Cupiditate, numquam.";


	// Image 3 URL 
		$Blocks_4_IMG_3 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&1";
		// Image 1 product title
		$Blocks_4_Product_Title_3 = "Product Title";
		// Image 1 product description
		$Blocks_4_Description_3 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 4 URL 
		$Blocks_4_IMG_4 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&1";
		// Image 1 product title
		$Blocks_4_Product_Title_4 = "Product Title";
		// Image 1 product description
		$Blocks_4_Description_4 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";

include (ROOT_PATH . 'INC/Blocks-four.php');


// Footer

		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = "";

		// Bread crumbs for the current page
		$CurrentPage = "Women";

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php'); 

?> 