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