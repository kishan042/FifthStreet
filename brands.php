<?php
// Config file
include_once 'INC/Config.php';

// Header
		// Title tag
		$Title = "Brands ";
		
		// Meta description
		$Description = "Fill text";

		$CSSPath = BASE_URL . "CSS/Styles.css";
		
		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');


// Navbar
		// Links to other pages	
		$men = MEN; 
		$women = WOMEN; 
		$brands = "#"; 
		$about = ABOUT; 
		$trending = TRENDING; 
		$offers = OFFERS; 
		$wardrobe = WARDROBE; 
		$search = SEARCH; 
		$profile = PROFILE; 
		$basket = BASKET; 

		include (ROOT_PATH . 'INC/Navbar.php'); 



// Spacing  
        // Add a class to hide the seperation
        $hide = "hidden-md-up";
        
        include (ROOT_PATH . 'INC/Spacing-mt-50.php');


// Hero-half-plain
		// copy for H1
		$h1 = "TOP BRANDS";

		//Copy for description
		$description = "No barriers between the physical and digital world anymore. For Android users, you can use your phone to tap on products to save them to your wardrobe or find out more information.";

		include (ROOT_PATH . 'INC/Hero-half-plain.php'); 

// Spacing  
        // Add a class to hide the seperation
        $hide = "hidden-md-up";
        
        include (ROOT_PATH . 'INC/Spacing-mt-50.php');

?>

<div class="container">
    <ul class="products block">
        <li>
            <a href="#">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
                <h2 class="product-title">Brand title</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
                <h2 class="product-title">Brand title</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
                <h2 class="product-title">Brand title</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
                <h2 class="product-title">Brand title</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
                <h2 class="product-title">Brand title</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
                <h2 class="product-title">Brand title</h2>
            </a>
        </li>
        <li>
            <a href="#">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
                <h2 class="product-title">Brand title</h2>
            </a>
        </li>
                <li>
            <a href="#">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
                <h2 class="product-title">Brand title</h2>
            </a>
        </li>
    </ul>
</div>
<?php

// Spacing	
		// Add a class to hide the seperation
		$hide = "";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer
		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = " ";

		// Bread crumbs for the current page
		$CurrentPage = "Brands";		

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php'); 

?> 