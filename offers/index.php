<?php
// Config file
    include_once '../INC/DB/Config.php';

// DB - Model
    include(ROOT_PATH . "INC/DB/model.php");
    // Call function to get the latest / trending products
     if (isset($_GET["Offid"])) {
        $offer_id = intval($_GET["Offid"]);
        $Offer_ID = get_single_offers($offer_id);
    } 

// Header
        // Title tag
        $Title = "Trending ";
        
        // Meta description
        $Description = "Fill text";

        // CSS path
        $CSSPath = BASE_URL . "CSS/Styles.css";
        
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


// Hero-half
        //IMG URL
        $url = $img . "lifestyle/trending-hero-shirt-shoes.jpg"; 
        // Amount of tint on image
        $tint = "tint-5";
        // copy for H1
        $h1 = "OFFERS";

        include (ROOT_PATH . 'INC/Hero-half.php');



// Spacing  
        // Add a class to hide the seperation
        $hide = "";
        
        include (ROOT_PATH . 'INC/Spacing-mt-100.php');

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
        $hide = "hidden-xs-up";

        // Bread crunb for the previous page 
        $PreviousPage = "";

        // Bread crumbs for the current page
        $CurrentPage = "Trending";
        

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php');

?> 
