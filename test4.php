<?php
ini_set('display_errors', 1);
error_reporting(~0);
// Config file
include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "Test 4 ";
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
		$women = WOMEN; 
		$brands = BRANDS; 
		$about = ABOUT; 
		$trending = TRENDING; 
		$offers = OFFERS; 
		$wardrobe = WARDROBE; 
		$search = SEARCH; 
		$profile = PROFILE; 
		$basket = BASKET; 

		include (ROOT_PATH . 'INC/Navbar.php'); 
?>



<style>
/*.tooltip {
    position: relative;
    display: inline-block;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 135px;
    background-color: #4c4c4c;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 5px 0px;
    font-size: 1rem;
    font-weight: 200;

    /* Position the tooltip */
   /* position: absolute;
    top: -50px;
    left: -45px;
    z-index: 2;
}*/

/*.tooltip:hover .tooltiptext,
.tooltip:hover .arrow-down { visibility: visible; }

.arrow-down {
    visibility: hidden;
    width: 0; 
    height: 0; 
    border-left: 20px solid transparent;
    border-right: 20px solid transparent;
    /*colour of border-top*/
    /*border-top: 20px solid #4c4c4c;*/

    /* Position the arrow of the tooltip */
    /*position: absolute;
    top: -25px;
    left: 4px;
    z-index: 1;*/
/*}*/

</style>

<div style="text-align:center;" class="container mt-100">

<p>Move the mouse over the text below:</p>

<div class="tooltip">Hover over me
  <span class="tooltiptext">Add to Wishlist</span>
  <div class="arrow-down"></div>
</div>

<div class="tooltip">Hover over me
  <span class="tooltiptext">Add to Basket</span>
  <div class="arrow-down"></div>
</div>

<p>Note that the position of the tooltip text isn't very good. Go back to the tutorial and continue reading on how to position the tooltip in an desirable way.</p>

</div>




<div class="simpleCart_shelfItem">
    <div class="row mt-30">
            <!-- Product image block -->
            <div class="product-img-block col-xs-12 offset-md-1 col-md-5 offset-xl-1 col-xl-6 mr-2">
                    <div>
                        <img id="colour"
                            class="img-fluid img-center item_image" 
                            src="<?php echo $img . 'souvenirs/article/girl-choosing-shoes-in-her-wardrobe.jpg' ?>" />
                    </div>

                    <div class="mt-30 hidden-xl-up">
                          
                    </div>
            </div>
            <!-- Product details block -->
            <div class="col-xs-12 col-md-5 col-lg-4 offset-lg-1 offset-xl-0 col-xl-3 desk-product-details">
                    <!-- Product title -->
                    <h1 class="h2-alt txt-xs-center txt-md-left txt-black mt-20 item_name">
                            Product
                    </h1>  
                    <!-- Price & Brand name -->
                    <div class="row mt-10">
                            <div class="col-xs-4 px-0">
                                   <h2 class="h3-alt txt-xs-center txt-md-left item_price">£40.00</h2>
                            </div>
                            <div class="col-xs-4 col-md-2 px-0">
                                    <h3 class="txt-xs-center txt-md-left">|</h3>
                            </div>
                            <div class="col-xs-4 px-0">
                                    <a href="<?php echo BASE_URL . 'brands/?Branid=' ?>">
                                        <h2 class="h3-alt txt-xs-center txt-md-left">by brand
                                        </h2>
                                    </a>
                            </div>      
                    </div>
                    <div class="hidden-md-up mt-30">
                            <h2 class="h3">Stock</h2>
                            <ul class="mt-20">
                                   
                            </ul>
                    </div>
                    
        
                                    <div class="mt-10">
                                            <h2 class="h3 hidden-md-up">Sizes</h2>
                                            <div class="row mt-20">
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 id="men-shoes" class="gender-option gender-selected">Men</h3>
                                                    </div>
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 id="women-shoes" class="gender-option">Women</h3>  
                                                    </div>
                                            </div>
                                            <ul class="men-shoe-sizes size-flex-center">
                                                    <li class="product-size">6</li>
                                                    <li class="product-size">7</li>
                                                    <li class="product-size">8</li>
                                                    <li class="product-size">9</li>
                                                    <li class="product-size">10</li>
                                                    <li class="product-size">11</li>
                                                    <li class="product-size">12</li>
                                                    <li class="product-size">13</li>
                                                    <li class="product-size">14</li>
                                                    <li class="product-size">15</li>
                                            </ul>
                                            <ul class="women-shoe-sizes hide size-flex-center">
                                                    <li class="product-size">2</li>
                                                    <li class="product-size">3</li>
                                                    <li class="product-size">4</li>
                                                    <li class="product-size">5</li>
                                                    <li class="product-size">6</li>
                                                    <li class="product-size">7</li>
                                                    <li class="product-size">8</li>
                                                    <li class="product-size">9</li>
                                                    <li class="product-size">10</li>
                                            </ul>
                                    </div>
         
                    
                    <!-- Set of 3 CTA's -->
                    <div class="row mt-50">
                            <div class="col-xs-2 px-0">
                                    <div id="3232" class="add-to-wishlist circle-btn-add tooltip">
                                        <span class="tooltiptext">Add to Wishlist</span>
                                        <div class="arrow-down"></div>
                                    </div>
                                    <div id="3232" 
                                        class="remove-from-wishlist circle-btn-remove hide tooltip">
                                        <span class="tooltiptext"> Remove</span>
                                        <div class="arrow-down"></div>
                                    </div>
                            </div>
                            <div class="col-xs-8 px-0">
                                       <button id="3232" class="h3-alt tertiary-btn-small btn-brand-cta item_add" href="javascript:;">
                                           Buy From Brand
                                       </button>
                            </div>
                            <div class="col-xs-2 px-0">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=">
                                     <div id="3232" class="circle-btn-basket product-share tooltip">
                                        <span class="tooltiptext">Share</span>
                                        <div class="arrow-down"></div>   
                                     </div> 
                                </a>
                            </div>
                    </div>
            </div> 
    </div>
    <div class="container">
            <hr class="hidden-sm-down mt-70">
                    <div class="row mt-20">
                            <div class="col-xs-12 col-md-6">
                                    <hr class="mt-40 hidden-md-up">
                                    <h2 class="mt-40 txt-xs-center">Product description</h2>
                                    <p class="mt-20">Product ID: 
                                        <span class="item_id">
                                            <?php echo $product["product_id"]; ?>
                                        </span>
                                    </p>
                                    <p><?php echo $product["product_description"] ?></p>

                            </div>
                            <div class="col-xs-12 col-md-6">
                                    <hr class="mt-40 hidden-md-up">
                                    <h2 class="mt-50 txt-xs-center">Ratings</h2>
                                    <h3 class="mt-50 h1 txt-gem txt-xs-center"><?php echo $product["rating"] ?> / 5</h3>
                                    <hr class="mt-40 hidden-md-up">
                            </div>
                    </div>
            <hr class="hidden-sm-down mt-50">
    </div>
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