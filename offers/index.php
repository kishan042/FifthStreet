<?php
// Config file
    include_once '../INC/DB/Config.php';

// DB - Model
    include(ROOT_PATH . "INC/DB/model.php");
        // Call function to get the latest / trending products
    //$all_products = get_all_products();
    // if an ID is specified in the query string, use it
    if (isset($_GET["Offid"])) {
        $offer_id = intval($_GET["Offid"]);
        $all_products = get_single_offer($offer_id);
    } 
    
// Header
        // Title tag
        $Title = "Offers ";
        
        // Meta description
        $Description = "Fill text";

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
        $trending = "#"; 
        $offers = OFFERS; 
        $wardrobe = WARDROBE; 
        $search = SEARCH; 
        $profile = PROFILE; 
        $basket = BASKET; 


        // Type "option-active" inside, to make option active
        $ActiveTrending = "option-active";
        $ActiveOffers = "";
        $ActiveWardrobe = "";       

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
            foreach($all_products as $product) {
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
