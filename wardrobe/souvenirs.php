<?php
// Config file
		include_once '../INC/DB/Config.php';

// DB - Model
		include(ROOT_PATH . "INC/DB/model.php");
        $recent = get_recent_products(4);

// Header
		// Title tag
		$Title = "My Souvenirs";

		// Meta description
		$Description = "Collect exclusive souvenirs as you explore and experience brands </br> by purchasing products. Get started below.";

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
		$h1 = "MY SOUVENIRS";

		//Copy for description
		$description = "Collect exclusive souvenirs as you explore and experience brands </br> by purchasing products. Get started below.";

		include (ROOT_PATH . 'INC/Hero-half-plain.php');


?>
        <div class="container">
            <ul id="output" class="products block">

            </ul>
        </div>

        <div class="container personalise">     
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
		$hide = " ";
		
		include (ROOT_PATH . 'INC/Spacing-mt-50.php');

// Footer
        // If current pages does not exist then add the 
        $hide = " ";

        // Link for previous page
        $PreviousPage_Link = BASE_URL . WARDROBE;

        // Bread crunb for the previous page 
        $PreviousPage = "Wardrobe";

		// Bread crumbs for the current page
		$CurrentPage = "My Souvenirs";

		include (ROOT_PATH . 'INC/Footer.php');


    // if an ID is specified in the query string, 
    // the id is used, but the page is reloaded
    //to prevent url manipulation
    if (isset($_GET["sou"])) {
      $souvenir_id = intval($_GET["sou"]);
      // use PHP variable in a Javascript function
      echo "<script>validate_Souvenir_Id('".$souvenir_id."')</script>";
      ?><script>window.location = window.location.href.split("?")[0];</script><?php
    } 

?>
<script>
// The following script tag focuses on collecting the product ids 
// collected in local storage and sending it to the database 
// through AJAX


   // define an empty array 
    var data = [];
    // collect ids from local storage
    var searches = localStorage.getItem('souvenirs');
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
      url: 'Ajax-souvenirs.php',
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

            // Those with the .rid classs will only show if product ids have not been added to the wishist
           $('.personalise').show();

        } else {
            // If data IS from the database then do the following:

            // Add the class .rid to those elements to hide
            // if data is successfully retrieved and outputed
           $('.personalise').hide();

            // Loop over each row in the JSON data sent back
            for(var index = 0; index != data.length; index++){
                var item = data[index];
                var sou_Id = item['id'];
                var sou_name = item['souvenir_name'];
                var brand_name = item['brand_name'];
                var link = item['link'];
                var image = item['image'];
                var alt = item['alt'];
                //console.log([productId, image, name]);


                 li = document.createElement('li');
                 a  = document.createElement('a');
                img = document.createElement('img');
                h2  = document.createElement('h2');
                h3  = document.createElement('h3');


                $('#output').prepend(li);
                li.append(a);
                a.href = "<?php echo BASE_URL; ?>" + link;
                a.append(img);
                img.setAttribute("class", "img-fluid");
                img.setAttribute("src", "<?php echo BASE_URL ?>" + image);
                img.setAttribute("alt", alt );
                a.append(h2);
                h2.setAttribute("class", "product-title");
                h2.innerHTML = sou_name;
                a.append(h3);
                h3.setAttribute("class", "brand-title");
                h3.innerHTML = brand_name;

            } // End of FOR loop

        } // End of else statement
        
    }; // End of function sortData
</script>