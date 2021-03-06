<?php
// Config file
		include_once '../../../INC/DB/Config.php';

// Header
		// Title tag
		$Title = "New Wardrobe ";
		
		// Meta description
		$Description = "New wardrobe article for spring";
		
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


// Hero-half
		//IMG URL
		$url = $img . "souvenirs/article/girl-choosing-shoes-in-her-wardrobe.jpg"; 
		// Amount of tint on image
		$tint = "tint-1";
		// copy for H1
		$h1 = "NEW WARDROBE";

		include (ROOT_PATH . 'INC/Hero-half.php');


// Spacing	
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Article heading
		// 
		$heading = "Change of Brands";

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
		$url = $img . "souvenirs/article/woman-searching-for-clothing-in-a-closet.jpg"; 
		
		include (ROOT_PATH . 'INC/Hero-compact.php');


// Spacing Mobile
		$hide = "hidden-md-up";

		include (ROOT_PATH . 'INC/Spacing-mt-50.php');

// Spacing Desktop
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Article heading
		// 
		$heading = "New Trends";

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


// Hero-compact
		//IMG URL
		$url = $img . "souvenirs/article/young-woman-searching-what-to-wear-in-a-wardrobe.jpg"; 
		
		include (ROOT_PATH . 'INC/Hero-compact.php');


// Spacing Mobile
		$hide = "hidden-md-up";

		include (ROOT_PATH . 'INC/Spacing-mt-50.php');

// Spacing Desktop
		$hide = "hidden-sm-down";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer
        // If current pages does not exist then add the 
        $hide = " ";

        // Link for previous page
        $PreviousPage_Link = "http://thefifthstreet.com/wardrobe/souvenirs.php";

        // Bread crunb for the previous page 
        $PreviousPage = "My Souvenirs";

		// Bread crumbs for the current page
		$CurrentPage = "New Wardrobe";

		include (ROOT_PATH . 'INC/Footer.php');