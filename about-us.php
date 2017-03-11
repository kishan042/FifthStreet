<?php
// Config file
		include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "About us ";
		
		// Meta description
		$Description = "Fill text";

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
		$url = "https://images.unsplash.com/photo-1463062511209-f7aa591fa72f?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop="; 
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


// Spacing	
include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Hero-compact
		//IMG URL
		$url = "https://images.unsplash.com/photo-1486092573896-31a373bf1aad?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop="; 
		
		include (ROOT_PATH . 'INC/Hero-compact.php');


// Spacing	
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


// Spacing	
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
include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer

		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = "";

		// Bread crumbs for the current page
		$CurrentPage = "About us";


		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php'); 

?> 