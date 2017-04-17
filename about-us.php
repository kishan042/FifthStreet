<?php
// Config file
		include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "About us ";
		
		// Meta description
		$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";
		
		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');

// Navbar
		// Links to other pages		
		$men = MEN; 
		$women = WOMEN; 
		$brands = BRANDS; 
		$about = "#"; 
		$trending = TRENDING; 
		$offers = OFFERS; 
		$wardrobe = WARDROBE; 
		$search = SEARCH; 
		$profile = PROFILE; 
		$basket = BASKET; 
		include (ROOT_PATH . 'INC/Navbar.php');


// Hero-half
		//IMG URL
		$url = $img . "lifestyle/about-Fifth-Street-hero.jpeg"; 
		// Amount of tint on image
		$tint = "tint-1";
		// copy for H1
		$h1 = "ABOUT US";

		include (ROOT_PATH . 'INC/Hero-half.php');


// Spacing	
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Article heading
		// 
		$heading = "Our Story";

		$copy = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias facere, asperiores provident earum perferendis. Temporibus natus magnam laborum nisi sed adipisci, commodi provident, rerum aspernatur molestias aperiam. Adipisci quas distinctio quidem voluptate iure earum, voluptatibus ex consequuntur sed odio magni molestiae, at a mollitia, saepe fugit molestias!";

		include (ROOT_PATH . 'INC/Article-heading.php');


// Article paragraph

		$copy = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias facere, asperiores provident earum perferendis. Temporibus natus magnam laborum nisi sed adipisci, commodi provident, rerum aspernatur molestias aperiam. Adipisci quas distinctio quidem voluptate iure earum, voluptatibus ex consequuntur sed odio magni molestiae, at a mollitia, saepe fugit molestias!";

		include (ROOT_PATH . 'INC/Article-paragraph.php');


// Spacing Mobile
		$hide = "hidden-md-up";

		include (ROOT_PATH . 'INC/Spacing-mt-50.php');

// Spacing Desktop
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Hero-compact
		//IMG URL
		$url = $img . "lifestyle/about-Fifth-Street-story.jpg"; 
		
		include (ROOT_PATH . 'INC/Hero-compact.php');


// Spacing Mobile
		$hide = "hidden-md-up";

		include (ROOT_PATH . 'INC/Spacing-mt-50.php');

// Spacing Desktop
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Article heading
		// 
		$heading = "Our Aim";

		$copy = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias facere, asperiores provident earum perferendis. Temporibus natus magnam laborum nisi sed adipisci, commodi provident, rerum aspernatur molestias aperiam. Adipisci quas distinctio quidem voluptate iure earum, voluptatibus ex consequuntur sed odio magni molestiae, at a mollitia, saepe fugit molestias!";

		include (ROOT_PATH . 'INC/Article-heading.php');


// Article paragraph
		// 
		$copy = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias facere, asperiores provident earum perferendis. Temporibus natus magnam laborum nisi sed adipisci, commodi provident, rerum aspernatur molestias aperiam. Adipisci quas distinctio quidem voluptate iure earum, voluptatibus ex consequuntur sed odio magni molestiae, at a mollitia, saepe fugit molestias!";

		include (ROOT_PATH . 'INC/Article-paragraph.php');


// Spacing Mobile
		$hide = "hidden-md-up";

		include (ROOT_PATH . 'INC/Spacing-mt-50.php');

// Spacing Desktop
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Article heading
		// 
		$heading = "How we help retailers";

		$copy = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias facere, asperiores provident earum perferendis. Temporibus natus magnam laborum nisi sed adipisci, commodi provident, rerum aspernatur molestias aperiam. Adipisci quas distinctio quidem voluptate iure earum, voluptatibus ex consequuntur sed odio magni molestiae, at a mollitia, saepe fugit molestias!";

		include (ROOT_PATH . 'INC/Article-heading.php');


// Article paragraph
		// 
		$copy = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias facere, asperiores provident earum perferendis. Temporibus natus magnam laborum nisi sed adipisci, commodi provident, rerum aspernatur molestias aperiam. Adipisci quas distinctio quidem voluptate iure earum, voluptatibus ex consequuntur sed odio magni molestiae, at a mollitia, saepe fugit molestias!";

		include (ROOT_PATH . 'INC/Article-paragraph.php');


// Spacing	
		include (ROOT_PATH . 'INC/Spacing-hr-compact.php');


// Contact form
		include (ROOT_PATH . 'INC/Form-contact-compact.php'); 


// Spacing	
		$hide = " ";

		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer

		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = "";

		// Bread crumbs for the current page
		$CurrentPage = "About us";

		include (ROOT_PATH . 'INC/Footer.php'); 