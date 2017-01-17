<?php
// Header
		// Title tag
		$Title = "Wardrobe ";
		// Meta description
		$Description = "Fill Text";

		// CSS path
		$CSSPath = "CSS/Styles.css";
		// Image source
		$img = "IMG/";

		include 'INC/Header.php';


// Nav
		// Links to other pages
		$home = "index.php";		
		$men = "#";
		$women = "#";
		$brands = "#";
		$about = "about-us.php";
		$trending = "#";
		$offers = "#";
		$wardrobe = "#";
		$search = "#";
		$profile = "#";
		$basket = "#";

		// Type "option-active" inside, to make option active
		$ActiveTrending = "";
		$ActiveOffers = "";
		$ActiveWardrobe = "option-active";

		include 'INC/Navbar.php'; 


// Hero-plain
		// copy for H1
		$h1 = "WARDROBE";

		include 'INC/Hero-half-plain.php';  


// Spacing	
		//include 'INC/Spacing-mt-100.php';



// Blocks-two-left-compact
				// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "MY WISHLIST";
		// Copy
		$BlockText = "Wonder across a range of brand collections and save any product which inspires you. Why stop there, you can even go to any physical store, and through a single tap, add products to your wish list.";
		// type 'hide' to remove the button
		$hideCTA = "";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

		include 'INC/Blocks-two-left-compact.php';



// Blocks-two-right-compact
		// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "MY SOUVENIRS";
		// Copy
		$BlockText = "Collect souvenirs as you purchase products in-store or online. You could earn a prize, a unique fitness video or vouchers. Anything is possible.";
		// type 'hide' to remove the button
		$hideCTA = "";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "See Souvenirs";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1477346611705-65d1883cee1e?dpr=2&auto=format&fit=crop&w=1500&h=1001&q=80&cs=tinysrgb&crop=";

		include 'INC/Blocks-two-right-compact.php';


// Blocks-two-left-compact
		// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "MY RECEIPTS";
		// Copy
		$BlockText = "View all of the products you have bought and save E-receipts for any purchase you make in-store or online. Return or exchange products at will.";
		// type 'hide' to remove the button
		$hideCTA = "";
		// Link for CTA
		$BlockLink = "#";
		// CTA copy
		$BlockCTA = "View Items";
		// Image URL
		$BlockIMG = "https://images.unsplash.com/photo-1483140900273-56364d20ddc5?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=";

		include 'INC/Blocks-two-left-compact.php';


// Spacing	
		// Add a class to hide the seperation
		$hide = "hidden-xs-down";

		include 'INC/Spacing-mt-100.php';


// Footer
		// page tag
		$page = "Wardrobe";

		include 'INC/Footer.php'; 

?> 