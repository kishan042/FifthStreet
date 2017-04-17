$(window).load(function() {

// This function captures the current page of the search icon
// That URL is then stored in local storage 
// If a url is stored then it will target the cross icon and set its href as the variable captured
// The item does not need to be removed from local storage

		$("#search-id").click(function(){
			var search = window.location.href;
			localStorage.setItem('url', search);
		});

		var storedValue = localStorage.getItem('url');
		if (storedValue) {
			$('#mob-search-cross-url').attr('href', storedValue);
		}

}); // End of onLoad function


$(document).ready(function(){

	// HAMBURGER MENU

		// Variables 
		body = $('body'),
		ToggleNav = body.find('.nav-toggle-btn');

		// Function to toggle class to the body tag
		// On click of hamburger menu
		ToggleNav.on('click', function(e) {

			// Toggle the class to slide the menu in or out
			body.toggleClass('active-nav');
			e.preventDefault();
			$(".primary-options").toggleClass("fixed");
		});//End of function

		// Following two functions
		// help show and hide the hamburger & cross icons
		$("#menu-icon").click(function(){
			$("#menu-icon").addClass("hide");
			$("#exit-icon").removeClass("hide");
		});

		$("#exit-icon").click(function(){
			$("#exit-icon").addClass("hide");
			$("#menu-icon").removeClass("hide");
		});


	// PRODUCT-FINDER module (DESKTOP HOVER STATE)

		// When the user hovers over a particular column
		// the rest of the colums will be tinted by adding a 
		// specific class. Once the mouse is removed, so is the class

		if ($(window).width() > 767) {

			$(".block-link").removeAttr("href");

		    $(".column").bind({
				click: function() {
					$(this).siblings().find(".box").addClass("column-focus");
					$(this).find(".hide").removeClass("hide");
					$(this).find(".box").addClass("column-expand");
				},
				mouseover: function() {
					$(this).siblings().find(".box").addClass("column-focus");
					$(this).find(".hide").removeClass("hide");
					$(this).find(".box").addClass("column-expand");
				},
				mouseout: function() {
					$(this).siblings().find(".box").removeClass("column-focus");
					$(this).find(".sub").addClass("hide");
					$(this).find(".box").removeClass("column-expand");
				}
			});
		}

	// HERO-FULL module

		// create variables
        $height = $(window).height();
        
        //Function to scroll the Body when user clicks on the chevron CTA
        $(".hero-down-arrow").click(function (event) {
            $('html, body').animate({scrollTop: $height}, 600);
        });
        // End of animation function


    // PRODUCT PAGE


    	// Colour selection
	    // used the following link to help achieve this effect of 
	    // changinh the images based on product id
		$(".product-colour").click(function(){
			// remove active state of all other colours
			$(this).siblings().removeClass("colour-active");
			// add active state to the colour clicked on
			$(this).addClass("colour-active");

			//get the value of the colour clicked on
			var new_Color = $(this).attr("id");
			// get the current image id value
			// set as the id
			var current_Img_Id = $(".item_image").attr('id');
			// target the image source
			// replace the current image id part of the image - shirt-111
			// with the new color value, and store it
			var new_Img = $(".item_image").attr('src').replace(current_Img_Id , new_Color);

			// change the image source with new id
			$(".item_image").attr('src', new_Img);
			// update the image tags id value
			$(".item_image").attr("id", new_Color);

		});

		// Gender selection
		$(".gender-option").click(function(){
			$(".gender-option").removeClass("gender-selected");
			$(this).addClass("gender-selected");

			var id = $(this).attr("id");

			if (id == "men-shoes") {
				$(".men-shoe-sizes").removeClass("hide");
				$(".women-shoe-sizes").addClass("hide");
			} else if (id == "women-shoes") {
				$(".women-shoe-sizes").removeClass("hide");
				$(".men-shoe-sizes").addClass("hide");
			}
		});

		//Size selection
		$(".product-size").click(function(){
			$(".product-size").removeClass("size-active");
			$(this).addClass("size-active");
		});

		// If user clicks on add to wishlist CTA
		// hide the CTA & show remove CTA
		$(".circle-btn-add").click(function(){
			$(this).toggleClass( "hide" );
			$(".circle-btn-remove").toggleClass( "hide" );
			// Capture the add to wishlist notification 
			var notif = $(".notif-added-to-wishlist");
			// Fade in then wait 3 seconds then fade out
			$(notif).fadeIn(1000)
                    .delay(3500)
                    .fadeOut(1300);
		});


		// If user clicks on remove from wishlist CTA
		// hide the CTA & show add CTA
		$(".circle-btn-remove").click(function(){
			$(this).toggleClass( "hide" );
			$(".circle-btn-add").toggleClass( "hide" );
			// Capture the remove from wishlist notification 
			var notif = $(".notif-removed-from-wishlist");
			// Fade in then wait 3 seconds then fade out
			$(notif).fadeIn(1000)
                    .delay(3500)
                    .fadeOut(1300);
		});

		// If user clicks on add to basket CTA
		$(".item_add").click(function(){
			// Capture the added to basket notification 
			var notif = $(".notif-added-to-basket");
			// Fade in then wait 3 seconds then fade out
			$(notif).fadeIn(1000)
                    .delay(3500)
                    .fadeOut(1300);
		});

		// For all notifications
		// If user clicks on cross icon
		// then hide the notification
		$(".notif-wishlist-exit").click(function(){
			$(".notif-added-to-wishlist").hide();
			$(".notif-removed-from-wishlist").hide();
			$(".notif-added-to-basket").hide();
		});

}); //END OF JQUERY

//---------------------------------------------------------------------------------------
//
//  local storage Functions
//
//---------------------------------------------------------------------------------------


// Go into strict mode to prevent any bugs
'use strict';

    // Test for local storage
    function supports_Local_Storage() {
      try {
        return 'localStorage' in window && window['localStorage'] !== null;
      } catch(e){
        return false;
      }
    }

    //-----------------------------------------------------------------------
    //  List of functions for wishlist
    //-----------------------------------------------------------------------


    // Retrieve searches from Local Storage, return an array
    function get_wishlist_LS() {
      var searches = localStorage.getItem('wishlist');
      if (searches) {
        return JSON.parse(searches);
      }
      return [];
    }

    // Validate and save strings to store of past searches
    function validate_Product_Id(str) {
      var searches = get_wishlist_LS();
      if (searches.indexOf(str) > -1 || !str) {
        return false;
      }
      searches.push(str);
      localStorage.setItem('wishlist', JSON.stringify(searches));
      return true;
    }

    //-----------------------------------------------------------------------
    //  List of functions for souvenirs 
    //-----------------------------------------------------------------------


    // Retrieve searches from Local Storage, return an array
    function get_souvenirs_LS() {
      var searches = localStorage.getItem('souvenirs');
      if (searches) {
        return JSON.parse(searches);
      }
      return [];
    }

    // Validate and save strings to store of past searches
    function validate_Souvenir_Id(str) {
      var searches = get_souvenirs_LS();
      if (searches.indexOf(str) > -1 || !str) {
        return false;
      }
      searches.push(str);
      localStorage.setItem('souvenirs', JSON.stringify(searches));
      return true;
    }

    //-----------------------------------------------------------------------
    //  List of functions for receipts 
    //-----------------------------------------------------------------------

    // Retrieve searches from Local Storage, return an array
    function get_basket_LS() {
      var searches = localStorage.getItem('basket');
      if (searches) {
        return JSON.parse(searches);
      }
      return [];
    }

    // Validate and save strings to store of past searches
    function validate_basket_Id(str) {
      var searches = get_basket_LS();
      searches.push(str);
      localStorage.setItem('basket', JSON.stringify(searches));
      return true;
    }

    // Retrieve searches from Local Storage, return an array
    function get_Receipt_LS() {
      var searches = localStorage.getItem('Receipt');
      if (searches) {
        return JSON.parse(searches);
      }
      return [];
    }

    // Validate and save strings to store of past searches
    function validate_Receipt_Id(str) {
      var searches = get_Receipt_LS();
      if (searches.indexOf(str) > -1 || !str) {
        return false;
      }
      searches.push(str);
      localStorage.setItem('Receipt', JSON.stringify(searches));
      return true;
    }

    // Validate the purchase of theproduct
    // prevent URL manipluation in E-receipts
    function validate_e_receipt(str) {
      var searches = get_Receipt_LS();
      if (searches.indexOf(str) > -1 || !str) {
        // console.log("true");
      } else {
        console.log("false");
        location.replace("http://thefifthstreet.com/wardrobe/receipts.php");
      }
    }

    //-----------------------------------------------------------------------
    //  Controller code
    //-----------------------------------------------------------------------

// If local storage is supported by the users browser 
if (supports_Local_Storage) {

    //-----------------------------------------------------------------------
    // controller for wishlist
    //-----------------------------------------------------------------------

		  // Set event handlers
		  $(".add-to-wishlist").click(function(){
				var ID = $(this).attr('id');
				validate_Product_Id(ID);
				});

		  // Reference to how I removed individual product Ids from the
		  // local storage array
		  // http://stackoverflow.com/questions/39725221/remove-an-item-from-an-array-inside-a-local-storage-object-with-javascript

		  $(".remove-from-wishlist").click(function(){
		  var id = $(this).attr('id');
		  var index = -1;
		  var obj = JSON.parse(localStorage.getItem('wishlist')); //fetch cart from storage
		//var items = obj; //get the products
		  for (var i = -1; i < obj.length; i++) { //loop over the collection
		    //console.log(obj.length);
		    if (obj[i] === id) { //see if ids match
		      obj.splice(i, 1); //remove item from array
		      break; //exit loop
		    }
		  }
		  localStorage.setItem('wishlist', JSON.stringify(obj)); //set item back into storage
		  });


	//-----------------------------------------------------------------------
	// controller for souvenirs
	//-----------------------------------------------------------------------

		// Set event handlers
          $(".add-souvenir").click(function(){
    			var ID = $(this).attr('id');
    			validate_Souvenir_Id(ID);
      		});

          function collect( $code ){
          validate_Souvenir_Id(ID);
          };


          // Reference to how I removed individual product Ids from the
          // local storage array
          // http://stackoverflow.com/questions/39725221/remove-an-item-from-an-array-inside-a-local-storage-object-with-javascript

          $(".remove-souvenir").click(function(){
          var id = $(this).attr('id');
          var index = -1;
          var obj = JSON.parse(localStorage.getItem('souvenirs')); //fetch cart from storage
        //var items = obj; //get the products
          for (var i = -1; i < obj.length; i++) { //loop over the collection
            //console.log(obj.length);
            if (obj[i] === id) { //see if ids match
              obj.splice(i, 1); //remove item from array
              break; //exit loop
            }
          }
          localStorage.setItem('souvenirs', JSON.stringify(obj)); //set item back into storage
          });


	//-----------------------------------------------------------------------
	// controller for receipts
	//-----------------------------------------------------------------------


		$(".item_add").click(function(){
			var ID = $(this).attr('id');
			validate_basket_Id(ID);
		});

		$(".checkout-btn").click(function(){
		var obj = JSON.parse(localStorage.getItem('basket')); //fetch cart from storage

		 for (var i = -1; i < obj.length; i++) { //loop over the collection
		   var id = obj[i]  //see if ids match
		   validate_Receipt_Id(id);      
		  }

		localStorage.removeItem('basket');
		localStorage.removeItem('simpleCart_items');

		});

		var basket_check = JSON.parse(localStorage.getItem('basket')); //fetch cart from storage

		//if basket array has more then one item
		// hide elements with the class .personlise
		if (basket_check.length > 0) {
		  $('.personalise-l2').toggleClass("hide");
		} else {
		 // $('.personalise-l2').parent().toggleClass("mt-100");
		}

} // End of supports local storage function