<?php
ini_set('display_errors', 1);
error_reporting(~0);

// Config file
	require_once("../INC/Config.php");

// DB - Model
	require_once(ROOT_PATH . 'INC/DB/model.php');
	// Function to get the 4 recent products in the database
    $recent = get_recent_products(4);


// Header
        // Title tag
        $Title = "Search ";
        
        // Meta description
        $Description = "Fill text";

        // CSS path
        $CSSPath = BASE_URL . "CSS/Styles.css";
        
        // Image source
        $img = BASE_URL . "IMG/";

        include (ROOT_PATH . 'INC/Header.php');


// Navbar
        // Links to other pages 
        $men = "../" . MEN; 
        $women = "../" . WOMEN; 
        $brands = "../" . BRANDS; 
        $about = "../" . ABOUT; 
        $trending = "../" . TRENDING; 
        $offers = "../" . OFFERS; 
        $wardrobe = "../" . WARDROBE; 
        $search = "#"; 
        $profile = "../" . PROFILE; 
        $basket = "../" . BASKET; 
     

		// Hide navbar.php tablet devices and down
		$search_override = "hidden-sm-down";

        include (ROOT_PATH . 'INC/Navbar.php');


// Hero-half-search
        //IMG URL
        $url = "https://images.unsplash.com/photo-1441986300917-64674bd600d8?dpr=2&auto=format&fit=crop&w=767&h=512&q=80&cs=tinysrgb&crop="; 
        // Amount of tint on image
        $tint = "tint-4";
        // copy for H1
        $h1 = "FIND | SAVE | BUY";

        include (ROOT_PATH . 'INC/Hero-half-search.php');


// Spacing  
        // Add a class to hide the seperation 
        $hide = "";
        
        include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Search-results
        // Display the results from the search query
        include (ROOT_PATH . 'INC/Search-results.php');



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
        $CurrentPage = "Search";
        

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php');

?> 
