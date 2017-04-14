<?php
        // a $product will only be set if an ID is specified in the query
        // string and it corresponds to a real product. If no product is
        // set, then redirect to the shirts listing page; otherwise, continue
        // on and display the Shirt Details page for that $product
        if (empty($_GET["Offid"])) {
            header("Location: http://localhost:8888/_Github/FifthStreet/offers.php" );
            exit();
        }

// Config file
    include_once '../INC/DB/Config.php';

// DB - Model
    include(ROOT_PATH . "INC/DB/model.php");
    // Call function to get the latest / trending products
     if (isset($_GET["Offid"])) {
        $Offer_id = intval($_GET["Offid"]);
        $Offer_ID = get_single_offer($Offer_id);
        $Offer_info = get_single_offer_info($Offer_id);
    } 
    

// Header
        // Title tag
        $Title = $Offer_info["offer_name"];
        
        // Meta description
        $Description = $Offer_info["offer_name"];

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

        // Bread crunb for the previous page 
        $PreviousPage = " Offers";

        // Bread crumbs for the current page
        $CurrentPage = $Offer_info["offer_name"];
        

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php');

?> 
