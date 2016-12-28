$(document).ready(function(){

// START OF TOOGLE HAMBURGER MENU


// VARIABLES 
body = $('body'),
ToggleNav = body.find('.nav-toggle-btn');

// FUNCTION TO TOGGLE NAVIGATION
// On click of hamburger menu
ToggleNav.on('click', function(e) {

	// Toggle the class to slide the menu in or out
	body.toggleClass('active-nav');
	e.preventDefault();
	//Hide secondary nav
});//End of function

// FUNCTION TO HIDE SECONDARY NAV
$(".nav-toggle-btn").click(function(){
	$(".mob-secondary-nav").toggle(100);
});




}); //END OF JQUERY
