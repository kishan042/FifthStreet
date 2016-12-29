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
	});//End of function

	// Function to hide secondary nav
	$(".nav-toggle-btn").click(function(){
		$(".mob-secondary-nav").toggle(100);
	});

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


}); //END OF JQUERY
