<?php
ini_set('display_errors', 1);
error_reporting(~0);

        // a $product will only be set if an ID is specified in the query
        // string and it corresponds to a real product. If no product is
        // set, then redirect to the shirts listing page; otherwise, continue
        // on and display the Shirt Details page for that $product
        if (empty($_GET["Branid"])) {
            header("Location: http://localhost:8888/_Github/FifthStreet/brands.php" );
            exit();
        }

// Config file
		include_once '../INC/DB/Config.php';


// DB - Model
	    require_once(ROOT_PATH . "INC/DB/model.php");


        //if an ID is specified in the query string, use it
        if (isset($_GET["Branid"])) {
            $brand_id = intval($_GET["Branid"]);
            $brand = get_single_brand($brand_id);
        }

// Header
		// Title tag
		$Title = $brand["brand_name"];
		// Meta description
		$Description = $brand["description"];

		// CSS path
		$CSSPath = BASE_URL . "CSS/Styles.css";
		
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
        $url = "https://images.unsplash.com/photo-1476147578954-fffd6bf00ab0?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop="; 
        // Amount of tint on image
        $tint = "tint-0";
        // copy for H1
        $h1 = " ";

        include (ROOT_PATH . 'INC/Hero-half.php');


// Blocks-two-compact-extend
		// Background colour class for text
		$BlockBG = "bg-white";
		// Title
		$BlockTitle = $brand["brand_name"];
		// Copy
		$BlockText = $brand["description"];
		// type 'hide' to remove the button
		$hideCTA = "";
		// Link for CTA
		$BlockLink = BASE_URL . "brands/catalogue.php?Branid=" . $brand_id;
		// CTA copy
		$BlockCTA = "View all items";
		// Image 1 URL 
		$BlockIMG_1 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";
		// Image 2 URL 
		$BlockIMG_2 = "https://images.unsplash.com/photo-1467320424268-f91a16cf7c77?dpr=2&auto=format&fit=crop&w=767&h=511&q=80&cs=tinysrgb&crop=";
		// Image 3 URL 
		$BlockIMG_3 = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

		include (ROOT_PATH . 'INC/Blocks-two-compact-extend.php');


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Blocks grid
		// Title
		$Block_Grid_Title = "Latest Clothing From";

	// Image 1 URL 
		$Block_Grid_IMG_1 = $img . "men/Men-hat-white.jpg";
		// Image 1 product title
		$product_Title_1 = "Product Title";
		// Image 1 product description
		$product_description_1 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 2 URL 
		$Block_Grid_IMG_2 = $img . "men/Men-shirt-3.png";
		// Image 1 product title
		$product_Title_2 = "Product Title";
		// Image 1 product description
		$product_description_2 = "lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 3 URL 
		$Block_Grid_IMG_3 = "https://images.pexels.com/photos/3572/fashion-man-wristwatch-model.jpg?w=940&h=650&auto=compress&cs=tinysrgb";
		// Image 1 product title
		$product_Title_3 = "Product Title";
		// Image 1 product description
		$product_description_3 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 4 URL 
		$Block_Grid_IMG_4 = $img . "men/Men-blue-tie.jpeg";
		// Image 1 product title
		$product_Title_4 = "Product Title";
		// Image 1 product description
		$product_description_4 = "lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 5 URL 
		$Block_Grid_IMG_5 = $img . "men/test.jpg";
		// Image 1 product title
		$product_Title_5 = "Product Title";
		// Image 1 product description
		$product_description_5 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 6 URL 
		$Block_Grid_IMG_6 = $img . "men/Men-glasses-2.jpeg";
		// Image 1 product title
		$product_Title_6 = "Product Title";
		// Image 1 product description
		$product_description_6 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 7 URL 
		$Block_Grid_IMG_7 = $img . "men/Men-shirt-1.png";
		// Image 1 product title
		$product_Title_7 = "Product Title";
		// Image 1 product description
		$product_description_7 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 8 URL 
		$Block_Grid_IMG_8 = $img . "men/Men-shirt-2.png";
		// Image 1 product title
		$product_Title_8 = "Product Title";
		// Image 1 product description
		$product_description_8 = "orem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 9 URL 
		$Block_Grid_IMG_9 = $img . "men/Men-bag.jpeg";
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
		$Blocks_3_Title = "Latest Footwear From";

	// Image 1 URL 
		$Blocks_3_IMG_1 = $img . "men/Men-hat-grey.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_1 = "Product Title";
		// Image 1 product description
		$Blocks_3_Description_1 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 2 URL 
		$Blocks_3_IMG_2 = $img . "men/Men-hat-grey.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_2 = "Product Title";
		// Image 1 product description
		$Blocks_3_Description_2 = "orem ipsum dolor sit amet, consectetur adipisicinag elit. Cupiditate, numquam.";


	// Image 3 URL 
		$Blocks_3_IMG_3 = $img . "men/Men-hat-grey.jpg";
		// Image 1 product title
		$Blocks_3_Product_Title_3 = "Product Title";
		// Image 1 product description
		$Blocks_3_Description_3 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


		include (ROOT_PATH . 'INC/Blocks-three.php');


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-50.php');



// Blocks-four grid
		// Title
		$Blocks_4_Title = "Latest Accessories From";

	// Image 1 URL 
		$Blocks_4_IMG_1 = $img . "men/Men-hat-grey.jpg";
		// Image 1 product title
		$Blocks_4_Product_Title_1 = "Product Title";
		// Image 1 product description
		$Blocks_4_Description_1 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 2 URL 
		$Blocks_4_IMG_2 = $img . "men/Men-glasses-1.jpeg";
		// Image 1 product title
		$Blocks_4_Product_Title_2 = "Product Title";
		// Image 1 product description
		$Blocks_4_Description_2 = "orem ipsum dolor sit amet, consectetur adipisicinag elit. Cupiditate, numquam.";


	// Image 3 URL 
		$Blocks_4_IMG_3 = $img . "men/Men-red-gloves.jpeg";
		// Image 1 product title
		$Blocks_4_Product_Title_3 = "Product Title";
		// Image 1 product description
		$Blocks_4_Description_3 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";


	// Image 4 URL 
		$Blocks_4_IMG_4 = $img . "men/Men-bag.jpeg";
		// Image 1 product title
		$Blocks_4_Product_Title_4 = "Product Title";
		// Image 1 product description
		$Blocks_4_Description_4 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, numquam.";

include (ROOT_PATH . 'INC/Blocks-four.php');


// Footer

		// If current pages does not exist then add the 
		$hide = " ";

		// Bread crunb for the previous page 
		$PreviousPage = "Brands";

		// Bread crumbs for the current page
		$CurrentPage = $brand["brand_name"];

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php'); 

?> 