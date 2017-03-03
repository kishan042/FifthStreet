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


// Reference to how I removed individual product Ids from the
// local storage array
// http://stackoverflow.com/questions/39725221/remove-an-item-from-an-array-inside-a-local-storage-object-with-javascript

// The following code checks if the product id has been added to the wishlist.
// depending on the answer the states of the CTA will be set in localStorage
// so when the user opens the browser, the CTA's are displayed correctly. 

		var id = $(".add-to-wishlist").attr('id');
		var index = -1;
		var obj = JSON.parse(localStorage.getItem('wishlist')); //fetch cart from storage

		for (var i = -1; i < obj.length; i++) { //loop over the collection
		//console.log(obj.length);
		if (obj[i] === id) { //see if ids match
			var hide = "hide";
			localStorage.setItem('added', hide); 
			localStorage.setItem('removed', '');
		} else {
			var hide = "hide";
			localStorage.setItem('removed', hide); 
			localStorage.setItem('added', '');
		}
		}// End of for loop

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
    // hide and show active states for CTAs

    	// Colour selection
		$(".product-colour").click(function(){
			$(this).siblings().removeClass("colour-active");
			$(this).addClass("colour-active");
		});

		// Gender selection
		$(".gender-option").click(function(){
			$(".gender-option").removeClass("gender-selected");
			$(this).addClass("gender-selected");
		});

		//Size selection
		$(".product-size").click(function(){
			$(this).siblings().removeClass("size-active");
			$(this).addClass("size-active");
		});

		// If user clicks on add to wishlist CTA
		// hide the CTA & show remove CTA
		$(".circle-btn-add").click(function(){
			$(this).toggleClass( "hide" );
			$(".circle-btn-remove").toggleClass( "hide" );
		});

		// If user clicks on remove from wishlist CTA
		// hide the CTA & show add CTA
		$(".circle-btn-remove").click(function(){
			$(this).toggleClass( "hide" );
			$(".circle-btn-add").toggleClass( "hide" );
		});


}); //END OF JQUERY





















