<?php
ini_set('display_errors', 1);
error_reporting(~0);

// Config file
	include_once 'INC/DB/Config.php';

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
        $url = "https://unsplash.imgix.net/photo-1414490929659-9a12b7e31907"; 
        // Amount of tint on image
        $tint = "tint-5";
        // copy for H1
        $h1 = "SEARCH";

        include (ROOT_PATH . 'INC/Hero-half-search.php');

?>


