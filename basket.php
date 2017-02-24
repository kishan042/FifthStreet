<?php
ini_set('display_errors', 1);
error_reporting(~0);
// Config file
include_once 'INC/Config.php';

// Header
		// Title tag
		$Title = "My Basket ";
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
		$basket = "#"; 

		include (ROOT_PATH . 'INC/Navbar.php'); 
?>

<style>
	.style { 
		display: inline-block;
		margin: 25px;
	 }
</style>

<li class="style">
<p>102</p>
<button class="add-to-wishlist" id="102">+</button>
</li>

<li class="style">
<p>118</p>
<button class="add-to-wishlist" id="118">+</button>
</li>

<li class="style">
<p>102</p>
<button class="remove-from-wishlist" id="102">-</button>
</li>

<li class="style">
<p>118</p>
<button class="remove-from-wishlist" id="118">-</button>
</li>



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

<!-- 

<script>
    'use strict';
    // Test for local storage
    function supportsLocalStorage() {
      try {
        return 'localStorage' in window && window['localStorage'] !== null;
      } catch(e){
        return false;
      }
    }

    // Retrieve searches from Local Storage, return an array
    function getRecentSearches() {
      var searches = localStorage.getItem('recentSearches');
      if (searches) {
        return JSON.parse(searches);
      }
      return [];
    }

    // Validate and save strings to store of past searches
    function saveSearchString(str) {
      var searches = getRecentSearches();
      if (searches.indexOf(str) > -1 || !str) {
        return false;
      }
      searches.push(str);
      localStorage.setItem('recentSearches', JSON.stringify(searches));
      return true;
    }


      if (supportsLocalStorage) {

        // Set event handlers
        $(".wishlist").click(function(){
  			var searchString = $(this).attr('id');
  			saveSearchString(searchString);
    		});


        // Reference to how I removed individual product Ids from the
        // local storage array
        // http://stackoverflow.com/questions/39725221/remove-an-item-from-an-array-inside-a-local-storage-object-with-javascript

        $(".wishlist-remove").click(function(){
        var id = $(this).attr('id');
        var index = -1;
        var obj = JSON.parse(localStorage.getItem('recentSearches')); //fetch cart from storage
      //var items = obj; //get the products
        for (var i = -1; i < obj.length; i++) { //loop over the collection
          //console.log(obj.length);
          if (obj[i] === id) { //see if ids match
            obj.splice(i, 1); //remove item from array
            break; //exit loop
          }
        }
        localStorage.setItem('recentSearches', JSON.stringify(obj)); //set item back into storage
        });


      } // End of supports local storage function
</script>
 -->

