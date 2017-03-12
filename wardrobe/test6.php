<?php
// Config file
		include_once 'INC/DB/Config.php';

// DB - Model
		include(ROOT_PATH . "INC/DB/model.php");
		//$default_souvenirs = get_default_souvenirs();

// Header
		// Title tag
		$Title = "test5";

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

		include (ROOT_PATH . 'INC/Navbar.php'); 


?>


    <ul class="recent-list" id="recentSearchList"></ul>





<script>
    // collect ids from local storage
    // var email = localStorage.getItem('wishlist');

    // console.log(email);


    // Retrieve searches from Local Storage, return an array
    function getRecentSearches() {
      var searches = localStorage.getItem('wishlist');
      if (searches) {
        return JSON.parse(searches);
      }
      return [];
    }

    // // Create an li, given string contents, append to the supplied ul
    // function appendListItem(listElement, string) {
    //   var listItemElement = document.createElement('li');
    //   listItemElement.className = "aClassName";
    //   listItemElement.innerHTML = string;
    //   listElement.appendChild(listItemElement);
    // }

    // Create an li, given string contents, append to the supplied ul
    function appendListItem(listElement, string) {
      var listItemElement = document.createElement('li');
      listItemElement.className = "aClassName";
      listItemElement.innerHTML = string;
      listElement.appendChild(listItemElement);
    }

    var recentSearchList = document.getElementById('recentSearchList');
    var collection = new Array();

    // Initialize display list
    var recentSearches = getRecentSearches();
    recentSearches.forEach(function(searchString) {
      appendListItem(recentSearchList,searchString);
      collection.push(searchString);
    });
    console.log(collection);
    console.log(collection.length);


</script>


<?php
	

// Spacing	
		// Add a class to hide the seperation
		$hide = "";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer
		// If current pages does not exist then add the 
		$hide = " ";

		// Bread crunb for the previous page 
		$PreviousPage = "Wardrobe";

		// Bread crumbs for the current page
		$CurrentPage = "My Souvenirs";

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php');

?>

<script>
	    
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
	
</script>






























