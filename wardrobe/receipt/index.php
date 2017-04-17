<?php
// Turn on output buffering on for header's
ob_start();

// Config file
        require_once ("../../INC/DB/Config.php");

// DB - Model
        require_once (ROOT_PATH . "INC/DB/model.php");

        //Prevent URL manipulation
        // This is the first part of preventing URL manipulation
        // the following code focuses on redirecting if the 
        // id in the url is empty or the id is not found in the url
        if (empty($_GET["id"])) {
            header("location: http://thefifthstreet.com/wardrobe/receipts.php");
            exit();

        } else if (isset($_GET["id"])) {
            $product_id = intval($_GET["id"]);
            $check = check_product_exists($product_id);
            $count = count($check);

            if($count == 0){
               // Product ID not found in DB
               header("location: http://thefifthstreet.com/wardrobe/receipts.php");
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
        $description = "Select a new size or colour below, and we will deliver it to you the next day.";

        include (ROOT_PATH . 'INC/Hero-half-plain.php');


// Product-exchange module
        include (ROOT_PATH . 'INC/Product-exchange.php');


// Spacing  
        // Add a class to hide the seperation
        $hide = " ";
        include (ROOT_PATH . 'INC/Spacing-mt-50.php'); 


// Product-exchange module
        include (ROOT_PATH . 'INC/Product-comments.php');


// Spacing  
        // Add a class to hide the seperation
        $hide = " ";
        
        include (ROOT_PATH . 'INC/Spacing-mt-50.php');

// Footer
        // If current pages does not exist then add the 
        $hide = " ";

        // Link for previous page
        $PreviousPage_Link = "http://thefifthstreet.com/wardrobe/receipts.php";

        // Bread crunb for the previous page 
        $PreviousPage = "My Receipts";

        // Bread crumbs for the current page
        $CurrentPage = $product["product_name"];

        include (ROOT_PATH . 'INC/Footer.php');

        //Prevent URL manipulation
        // This is the second part of preventing URL manipulation
        // the following code focuses on redirecting if the 
        // id in the url does not exist in the local storage
        if (isset($_GET["id"])) {
          $product_id = intval($_GET["id"]);
          // validate the id with local storage
          // if the id does not match the id in local storage
          // Javascript will redirct the user.
          echo "<script> validate_e_receipt('".$product_id."'); </script>";
        }
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