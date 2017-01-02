<?php
// Header
		// Title tag
		$Title = "Fifth Street ";
		// Meta description
		$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";

		// CSS path
		$CSSPath = "CSS/Styles.css";
		// Image source
		$img = "IMG/";

		include 'INC/Header.php';


// Nav
		include 'INC/Navbar.php'; 


// Hero-full
		// IMG URL
		 $url = "https://images.unsplash.com/photo-1476990789491-712b869b91a5?dpr=2&auto=format&w=1500&h=400&q=20&cs=tinysrgb&crop="; 
		// Amount of tint on image
		$tint = "tint-0";
		// copy for H1
		$h1 = "ACCESS". '<br>' . "THE UNKNOWN";
		// copy for h2
		$description = "Fifth Street is all about bridging online and offline";
		// copy for CTA
		$CTA = "FIND OUT MORE";

		include 'INC/Hero-full.php';  


// Product-finder
		include 'INC/Product-finder.php';


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-xs-down";
		
		include 'INC/Spacing-mt-100.php';


// Blocks-two-left-compact
		include 'INC/Blocks-two-left-compact.php';


// Blocks-two-right-compact
		include 'INC/Blocks-two-right-compact.php';


// Product-finder
		include 'INC/Feature-intro.php';


// Blocks-two-left
		include 'INC/Blocks-two-left.php';


// Blocks-two-right
		include 'INC/Blocks-two-right.php';


// Footer
		// page tag
		$page = "Home";

		include 'INC/Footer.php'; 

?> 