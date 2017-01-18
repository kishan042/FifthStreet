<?php
// Header
		// Title tag
		$Title = "Home ";
		// Meta description
		$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";

		// CSS path
		$CSSPath = "CSS/Styles.css";
		// Image source
		$img = "IMG/";

		include 'INC/Header.php';


// Navbar
		// Links to other pages
		$home = "#";		
		$men = "#";
		$women = "#";
		$brands = "#";
		$about = "about-us.php";
		$trending = "#";
		$offers = "#";
		$wardrobe = "wardrobe.php";
		$search = "#";
		$profile = "#";
		$basket = "#";

		include 'INC/Navbar.php'; 


// Hero-full
		// IMG URL
		 $HeroUrl = "https://images.unsplash.com/photo-1476990789491-712b869b91a5?dpr=2&auto=format&w=1500&h=400&q=20&cs=tinysrgb&crop="; 
		// Amount of tint on image
		$tint = "tint-0";
		// copy for H1
		$h1 = "ACCESS". '<br>' . "THE UNKNOWN";
		// copy for h2
		$description = "Fifth Street is all about bridging online and offline";
		//url for button (CTA)
		$ButtonUrl = "about-us.php";
		// copy for button (CTA)
		$ButtonCopy = "FIND OUT MORE";

		include 'INC/Hero-full.php';  


// Product-finder
		include 'INC/Product-finder.php';


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-xs-down";
		
		include 'INC/Spacing-mt-100.php';


// Blocks-two-left-compact
		$BlockBG = "";
		// Title
		$BlockTitle = "NFC compatibility";
		// Copy
		$BlockText = "No barriers between the physical and digital world anymore. For Android usevrs, you can use your phone to tap on products to save them to your wardrobe or find out more information.";
		// type 'hide' to remove the button
		$hideCTA = "hide";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1477346611705-65d1883cee1e?dpr=2&auto=format&fit=crop&w=1500&h=1001&q=80&cs=tinysrgb&crop=";

		include 'INC/Blocks-two-left-compact.php';


// Blocks-two-right-compact
		// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "EXCLUSIVE CONTENT";
		// Copy
		$BlockText = "Collect souvenirs as you purchase products in-store or online. You could earn a prize, a unique fitness video or vouchers. Anything is possible.";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

		include 'INC/Blocks-two-right-compact.php';


// Feature-intro
		include 'INC/Feature-intro.php';


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-md-up";
		
		include 'INC/Spacing-mt-100.php';


// Blocks-two-left
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "NFC compatibility";
		// Copy
		$BlockText = "No barriers between the physical and digital world anymore. For Android usevrs, you can use your phone to tap on products to save them to your wardrobe or find out more information.";
		// type 'hide' to remove the button
		$hideCTA = "hide";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1477346611705-65d1883cee1e?dpr=2&auto=format&fit=crop&w=1500&h=1001&q=80&cs=tinysrgb&crop=";

		include 'INC/Blocks-two-left.php';


// Blocks-two-right
		// Background colour class for text
		$BlockBG = "";
		// Title
		$BlockTitle = "EXCLUSIVE CONTENT";
		// Copy
		$BlockText = "Collect souvenirs as you purchase products in-store or online. You could earn a prize, a unique fitness video or vouchers. Anything is possible.";
		// type 'hide' to remove the button
		$hideCTA = "hide";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

		include 'INC/Blocks-two-right.php';


// Footer
		// page tag
		$page = "Home";

		include 'INC/Footer.php'; 

?> 