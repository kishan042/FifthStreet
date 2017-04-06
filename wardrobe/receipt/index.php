<?php
// Turn on output buffering on for header's
ob_start();
// debugging PHP
ini_set('display_errors', 1);
error_reporting(~0);


// Config file
        require_once ("../../INC/DB/Config.php");

// DB - Model
        require_once (ROOT_PATH . "INC/DB/model.php");


        if (empty($_GET["id"])) {
            header("Location: http://localhost:8888/_Github/FifthStreet/trending.php" );
            exit();

        } else if (isset($_GET["id"])) {
            $product_id = intval($_GET["id"]);
            $check = check_product_exists($product_id);
            $test = count($check);

            if($test == 0){
               // Product ID not found in DB
               header( "location:" . BASE_URL . TRENDING );
            } else {
               // Product ID found in DB
               $product = get_single_product($product_id);
               $product_colors = get_single_product_colours($product_id);
            }
        }


// Header
        // Title tag
        $Title = $product["product_name"];
        
        // Meta description
        $Description = "Fill text";

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

// Notification

        include (ROOT_PATH . 'INC/Notification-wishlist-add.php');
        include (ROOT_PATH . 'INC/Notification-wishlist-remove.php');
        include (ROOT_PATH . 'INC/Notification-basket-add.php');



// Hero-half-plain
        // copy for H1
        $h1 = "Exchange";

        //Copy for description
        $description = "View products purchased online and in-store in one place. Go one step further and exchange products according to your convenience.";

        include (ROOT_PATH . 'INC/Hero-half-plain.php');

?>
<div class="simpleCart_shelfItem">
    <div class="row mt-30">
            <!-- Product image block -->
            <div class="product-img-block col-xs-12 offset-md-1 col-md-5 offset-xl-1 col-xl-6 mr-2">
                    <div class="p-2 bg-gray-lightest">
                        <img id="<?php echo $product["colour_int"]?>"
                            class="img-fluid img-center item_image" 
                            src="<?php echo BASE_URL . $product["image"] ?>" 
                            alt="<?php echo $product["alt"] ?>"/>
                    </div>

                    <div class="mt-30 hidden-xl-up">
                            <ul class="colours-flex-center">
                                <?php
                                    foreach($product_colors as $color) {
                                        include(ROOT_PATH . "INC/DB/color-list.php");
                                    }
                                ?>
                            </ul>
                    </div>
            </div>
            <!-- Product details block -->
            <div class="col-xs-12 col-md-5 col-lg-4 offset-lg-1 offset-xl-0 col-xl-3 desk-product-details">
                    <!-- Product title -->
                    <h1 class="h2-alt txt-xs-center txt-md-left txt-black mt-20 item_name">
                            <?php echo $product["product_name"] ?>
                    </h1>  
                    <!-- Price & Brand name -->
                    <div class="row mt-10">
                            <div class="col-xs-4 px-0">
                                   <h2 class="h3-alt txt-xs-center txt-md-left item_price">£<?php echo $product["price"]?></h2>
                            </div>
                            <div class="col-xs-4 col-md-2 px-0">
                                    <h3 class="txt-xs-center txt-md-left">|</h3>
                            </div>
                            <div class="col-xs-4 px-0">
                                    <a href="<?php echo BASE_URL . 'brands/?Branid=' . $product["brand_id"] ?>">
                                        <h2 class="h3-alt txt-xs-center txt-md-left">by <?php echo $product["brand_name"] ?>
                                        </h2>
                                    </a>
                            </div>      
                    </div>
                    <div class="hidden-md-up mt-30">
                            <h2 class="h3">Stock</h2>
                            <ul class="mt-20">
                                    <h2 class="h3-alt txt-gem"><?php echo $product["stock"] ?> available in-store</h2>
                                    <h2 class="h4"><?php echo $product["stock"] ?> available online</h2>
                            </ul>
                    </div>
                    <div class="mt-30 primary-colour-set hidden-lg-down">
                            <h2 class="h3 hidden-lg-up">Colours</h2>
                            <ul class="colours-flex-center">
                                <?php
                                    foreach($product_colors as $color) {
                                        include(ROOT_PATH . "INC/DB/color-list.php");
                                    }
                                ?>
                            </ul>
                    </div>
                    
                    <?php if ($product["size_type"] == 'footwear') {
                                ?>
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
                                <?php 

                    }  else  {
                                ?>
                                    <div class="mt-10">
                                            <h2 class="h3 hidden-md-up">Sizes</h2>
                                            <div class="row mt-20">
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 class="gender-option gender-selected">Men</h3>
                                                    </div>
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 class="gender-option">Women</h3>  
                                                    </div>
                                            </div>
                                            <ul class="size-flex-center">
                                                    <li class="product-size">XS</li>
                                                    <li class="product-size">SM</li>
                                                    <li class="product-size">MD</li>
                                                    <li class="product-size">LG</li>
                                            </ul>
                                    </div>
                                <?php
                    } ?>
                    
                    <!-- Set of 3 CTA's -->
                    <div class="row mt-50">
                            <div class="col-xs-2 px-0">
                                    <div id="<?php echo $product["product_id"] ?>" 
                                    class="add-to-wishlist circle-btn-add"></div>

                                    <div id="<?php echo $product["product_id"] ?>" 
                                    class="remove-from-wishlist circle-btn-remove hide"></div>
                            </div>
                            <div class="col-xs-8 px-0">
                                   <a class="tertiary-btn-flex-center" href="<?php echo BASE_URL . 'brands/?Branid=' . $product["brand_id"] ?>">
                                       <button class="h3-alt tertiary-btn-small btn-brand-cta">
                                           Exchange
                                       </button>
                                   </a>
                            </div>
                            <div class="col-xs-2 px-0">
                                 <div id="<?php echo $product["product_id"]; ?>" class="circle-btn-basket item_add" href="javascript:;"></div> 
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
                                    <h3 class="h1 txt-gem txt-xs-center"><?php echo $product["rating"] ?> / 5</h3>
                                    <hr class="mt-40 hidden-md-up">
                            </div>
                    </div>
            <hr class="hidden-sm-down mt-50">
    </div>
</div>

<?php include (ROOT_PATH . 'INC/Spacing-mt-50.php'); ?>


<div class="container">
        <div id="disqus_thread"></div>
</div>

<?php
// Spacing  
        // Add a class to hide the seperation
        $hide = "";
        
        include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Footer
        // If current pages does not exist then add the 
        $hide = "hidden-xs-up";

        // Bread crunb for the previous page 
        $PreviousPage = "";

        // Bread crumbs for the current page
        $CurrentPage = $product["product_name"];
        

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php');

        // ID from the php get function - $product_id 
?> 
<script>
    $(window).load(function() {
        // get the current ID from the url, and store in a variable
        var product_id = <?php echo $product_id; ?>;
        
        // The following code checks if the product id collected has been added to the wishlist LS.
        // If id matches, then the remove from wishlist CTA is displayed
        // loop is exited.
        // Else, by default the add to wishlist is displayed

                var id = product_id;
                var index = -1;
                var obj = JSON.parse(localStorage.getItem('wishlist')); //fetch cart from local storage

                for (var i = -1; i < obj.length; i++) { //loop over the collection
                //console.log(obj.length);
                    if (obj[i] == id) { //see if ids match
                        //console.log("true");
                        $(".circle-btn-add").addClass("hide");
                        $(".circle-btn-remove").removeClass("hide");
                        break; //exit loop
                    } else {
                        //console.log("false");
                        $(".circle-btn-add").removeClass("hide");
                        $(".circle-btn-remove").addClass("hide");
                    }
                }// End of for loop

    }); // End of onLoad function

    // The following code is for the comments section
    // This code should not be added with the rest of the javascript
    // as the code will create an error
    // as it is dependent on the product id prodived in the url
    var disqus_config = function () {
    this.page.url = 'http://thefifthstreet.com/';  
    this.page.identifier = <?php echo $product["product_id"] ?>;
    };

    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = '//fifthstreet-1.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>