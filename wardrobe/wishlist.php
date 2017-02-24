<?php
ini_set('display_errors', 1);
error_reporting(~0);
// Config file
include_once '../INC/Config.php';

// DB - Model
    include(ROOT_PATH . "INC/DB/model.php");
    // Call function to get the latest / trending products
    $recent = get_products_recent();


// Header
		// Title tag
		$Title = "My Wishlist";

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
		$ActiveTrending = "";
		$ActiveOffers = "";
		$ActiveWardrobe = "option-active";

		include (ROOT_PATH . 'INC/Navbar.php'); 


// Hero-half-plain
        // copy for H1
        $h1 = "MY WISHLIST";

        //Copy for description
        $description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

        include (ROOT_PATH . 'INC/Hero-half-plain.php'); 


?>




  <div><p class="rid">this element will be accessed by jquery and this text replaced</p></div>

<div class="container">
    <ul id="output" class="products block">

    </ul>
</div>


<?php

// Spacing  
        // Add a class to hide the seperation
        $hide = "";
        
        include (ROOT_PATH . 'INC/Spacing-mt-100.php');


/// Footer
        // If current pages does not exist then add the 
        $hide = " ";

        // Bread crunb for the previous page 
        $PreviousPage = "Wardrobe";

        // Bread crumbs for the current page
        $CurrentPage = "My Wishlist";

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php');

?> 

  <script>
   // define an empty array 
    var data = [];
    // collect ids from local storage
    var searches = localStorage.getItem('recentSearches');
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
      url: 'test3.php',
      type: 'post',                     
      data: {'key': data},                    // get data array and send through Ajax
      dataType: 'json',                    
      success: function(data)                   // data returned from php db        
      {
        // put data collected into function "sortData"
        sortData(data);
      } 
    });

    function sortData(data){
        if (data.length > 0) {
            $('.rid').hide();
            // Loop over each row in the JSON data sent back
            for(var index = 0; index != data.length; index++){
                var item = data[index];
                var productId = item['id'];
                var image = item['image'];
                var name = item['name'];
                //console.log([productId, image, name]);


                 li = document.createElement('li');
                 a  = document.createElement('a');
                img = document.createElement('img');
                h2  = document.createElement('h2');
                h3  = document.createElement('h3');


                $('#output').append(li);
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
                h3.innerHTML = "Brand title";


            }
        } else {
            $('.rid').show();
        } // End of else statement
        

    }; // End of function
  </script>







