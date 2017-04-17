<?php
// Turn on output buffering on for header's
ob_start();

// Config file
    include_once '../INC/DB/Config.php';

// DB - Model
    include(ROOT_PATH . "INC/DB/model.php");

    // Prevent URL manipulation
     if (empty($_GET["Offid"])) {
        header("Location: http://thefifthstreet.com/offers.php" );
        exit();

    } else if (isset($_GET["Offid"])) {
        $Offer_id = intval($_GET["Offid"]);
        $check = check_offer_exists($Offer_id);
        $count = count($check);

        if($count == 0){
           // Product ID not found in DB
           header("Location: http://thefifthstreet.com/offers.php" );
        } else {
           // Product ID found in DB
           $Offer_ID = get_single_offer($Offer_id);
           $Offer_info = get_single_offer_info($Offer_id);
        }
    }
    
// Header
        // Title tag
        $Title = $Offer_info["offer_name"];
        
        // Meta description
        $Description = $Offer_info["offer_name"];
        
        // Image source
        $img = BASE_URL . "IMG/";

        include (ROOT_PATH . 'INC/Header.php');


// Navbar
        // Links to other pages 
        $men =  BASE_URL . MEN;
		$women = BASE_URL . WOMEN;
		$brands = BASE_URL . BRANDS;
		$about = BASE_URL . ABOUT;
		$trending = BASE_URL . TRENDING;
		$offers = BASE_URL . OFFERS;
		$wardrobe = BASE_URL . WARDROBE;
		$search = BASE_URL . SEARCH;
		$profile = BASE_URL . PROFILE;
		$basket = BASE_URL . BASKET;


        // Type "option-active" inside, to make option active
        $ActiveTrending = " ";
        $ActiveOffers = "option-active";
        $ActiveWardrobe = " ";       

        include (ROOT_PATH . 'INC/Navbar.php');


// Hero-half-plain
        // copy for H1
        $h1 = $Offer_info["offer_name"];
        // description
        $description = "Take full advantage of this offer while it lasts.";

        include (ROOT_PATH . 'INC/Hero-half-plain.php');


         ?>
         <div class="container">
             <ul class="products block">
                 <?php
                    foreach($Offer_ID as $product) {
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
        $hide = " ";

        // Link for previous page
        $PreviousPage_Link = "http://thefifthstreet.com/offers.php";

        // Bread crunb for the previous page 
        $PreviousPage = " Offers";

        // Bread crumbs for the current page
        $CurrentPage = $Offer_info["offer_name"];

        include (ROOT_PATH . 'INC/Footer.php');
?> 