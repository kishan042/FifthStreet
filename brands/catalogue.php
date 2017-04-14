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
            $all_products = get_brand_cat($brand_id);
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

?>
<div class="container">
    <ul class="products block">
            <?php 
                foreach($all_products as $catalogue) {
                    include(ROOT_PATH . "INC/DB/catalogue-block.php");
                }
            ?>
    </ul>
</div>
<?php

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