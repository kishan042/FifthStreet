<?php
// Config file
        include_once '../INC/DB/Config.php';

// DB - Model
        include(ROOT_PATH . "INC/DB/model.php");
        // Function to get the 8 recent products in the database
        $recent = get_recent_products(4);

// Header
		// Title tag
		$Title = "My Wishlist";

		// Meta description
		$Description = "View and save products you like in-store or online, without even signing up.";

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
		$ActiveTrending = "";
		$ActiveOffers = "";
		$ActiveWardrobe = "option-active";

		include (ROOT_PATH . 'INC/Navbar.php'); 


// Hero-half-plain
        // copy for H1
        $h1 = "MY WISHLIST";

        //Copy for description
        $description = "View and save products you like in-store or online, without even signing up.";

        include (ROOT_PATH . 'INC/Hero-half-plain.php'); 


?>
        <div class="container">
            <ul id="output" class="products block">

            </ul>
        </div>
<?php 

// Spacing  
        // Add a class to hide the seperation when the wishlist
        // is empty
        $hide = "personalise";
        
        include (ROOT_PATH . 'INC/Spacing-mt-100.php');

?>
        <div class="container">     
            <h2 class="txt-xs-center my-3 personalise">Latest product&rsquo;s</h2>
            <ul class="products block">
                <?php
                    foreach($recent as $product) {
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
        $PreviousPage_Link = BASE_URL . WARDROBE;

        // Bread crunb for the previous page 
        $PreviousPage = "Wardrobe";

        // Bread crumbs for the current page
        $CurrentPage = "My Wishlist";

        include (ROOT_PATH . 'INC/Footer.php');



// The following script tag focuses on collecting the product ids collected
// in local storage.

    //-----------------------------------------------------------------------
    //  AJAX request 
    //-----------------------------------------------------------------------
?>

<script>
   // define an empty array 
    var data = [];
    // collect ids from local storage
    var searches = localStorage.getItem('wishlist');
    // If searches exists iterate results
    if (searches) {
        // format ids collected into json array 
        searches = JSON.parse(searches);
        // Pushes each id into the data array 
        for (var item = 0; item != searches.length; item++) {
            // set the key name as 'item'
            data.push({ item : searches[item]});
        } 
    }
    
    //-----------------------------------------------------------------------
    //  AJAX request  
    //-----------------------------------------------------------------------

    $.ajax({                                      
      url: 'Ajax-wishlist.php',
      type: 'post',                     
      data: {'key': data},  // get data array and send through Ajax
      dataType: 'json',                    
      success: function(data)  // data returned from php db        
      {
        // put data collected into function "sortData" below
        sortData(data);
      } 
    }); 

    //-----------------------------------------------------------------------
    //  sortDara function to append the data from the Ajax request
    //-----------------------------------------------------------------------

    function sortData(data){
        if (!data.length > 0) {
            // If NO data is from the database then do the following:

            // Those with the .personalise classs will only show if product ids have not been added to the wishist
            $('.personalise').hide();

        } else {
            // If data IS from the database then do the following:

            // Add the class .personalise to those elements to hide
            // if data is successfully retrieved and outputed
            $('.personalise').show();

            // Loop over each row in the JSON data sent back
            for(var index = 0; index != data.length; index++){
                var item = data[index];
                var productId = item['id'];
                var image = item['image'];
                var name = item['name'];
                var brand_name = item['brand_name'];


                 li = document.createElement('li');
                 a  = document.createElement('a');
                img = document.createElement('img');
                h2  = document.createElement('h2');
                h3  = document.createElement('h3');


                $('#output').prepend(li);
                li.append(a);
                a.href = "<?php echo BASE_URL; ?>product.php/?id=" + productId;
                a.append(img);
                img.setAttribute("class", "img-fluid");
                img.setAttribute("src", "<?php echo BASE_URL ?>" + image);
                img.setAttribute("alt", name );
                a.append(h2);
                h2.setAttribute("class", "product-title");
                h2.innerHTML = name;
                a.append(h3);
                h3.setAttribute("class", "brand-title");
                h3.innerHTML = brand_name;

            } // End of FOR loop

        } // End of else statement
        
    }; // End of function sortData
</script>