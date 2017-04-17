<?php
// Turn on output buffering on for header's
ob_start();
// Config file
        require_once ("INC/DB/Config.php");

// DB - Model
        require_once (ROOT_PATH . "INC/DB/model.php");

        // Prevent URL manipulation
        if (empty($_GET["id"])) {
            header("Location: http://thefifthstreet.com/trending.php" );
            exit();

        } else if (isset($_GET["id"])) {
            $product_id = intval($_GET["id"]);
            $check = check_product_exists($product_id);
            $count = count($check);

            if($count == 0){
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
        $Description = $product["product_description"];
        
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


// Spacing  
        // Add a class to hide the seperation
        $hide = "hidden-sm-down";
        
        include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Product-exchange module
        include (ROOT_PATH . 'INC/Product-detail.php');


// Spacing  
        // Add a class to hide the seperation
        $hide = " ";

        include (ROOT_PATH . 'INC/Spacing-mt-50.php'); 

?>  <!-- The code below is modulised, however caused issues
    when included through php, due to API -->
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