<?php

		// Config file
				include_once 'INC/DB/Config.php';	
    
		
		// Header
				// Title tag
				$Title = "Thank you ";
				// Meta description
				$Description = "Fill text";
				// CSS path
				$CSSPath = "CSS/Styles.css";
				// Image source
				$img = "IMG/";

				include 'INC/Header.php';


		// Navbar
				// Links to other pages		
				$men = MEN; 
				$women = WOMEN; 
				$brands = BRANDS; 
				$about = ABOUT; 
				$trending = TRENDING; 
				$offers = OFFERS; 
				$wardrobe = WARDROBE; 
				$search = SEARCH; 
				$profile = PROFILE; 
				$basket = BASKET; 
				include 'INC/Navbar.php'; 


		// Hero-plain
				// copy for H1
				$h1 = "THANK YOU!";

				//Copy for description
		 		$description = "Your message has been sent to us successfully, and we will be in touch as soon as possible.";

				include 'INC/Hero-half-plain.php';  


		// Blocks-two-left-compact
						// Background colour class for text
				$BlockBG = "bg-gray-lightest";
				// Title
				$BlockTitle = "COLLECT SOUVENIR";
				// Copy
				$BlockText = "Congratulations! As a reward please claim a free souvenir by clicking on the claim button below 
";
				// type 'hide' to remove the button
				$hideCTA = "";
				// Link for CTA
				$BlockLink = BASE_URL . "wardrobe/souvenirs.php?sou=101";
				// CTA copy
				$BlockCTA = "View Souvenir";
				// Image URL
				$BlockIMG = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

				include (ROOT_PATH . 'INC/Blocks-two-left-compact.php');


		// Spacing	
				include 'INC/Spacing-mt-100.php';



		// Footer
				// If current pages does not exist then add the 
				$hide = " ";

				// Bread crunb for the previous page 
				$PreviousPage = "About us";

				// Bread crumbs for the current page
				$CurrentPage = " ";

				// JS path
				$JSPath = BASE_URL . "JS/jquery.js";

				include (ROOT_PATH . 'INC/Footer.php');