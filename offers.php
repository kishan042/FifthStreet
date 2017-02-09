<?php
// Config file
include_once 'INC/Config.php';

// Header
		// Title tag
		$Title = "Offers ";
		// Meta description
		$Description = "Fill text";

		// CSS path
		$CSSPath = "CSS/Styles.css";
		// Image source
		$img = "IMG/";

		include 'INC/Header.php';


// Navbar
		// Links to other pages	
		$men = "#";
		$women = "#";
		$brands = "brands.php";
		$about = "about-us.php";
		$trending = "trending.php";
		$offers = "offers.php";
		$wardrobe = "wardrobe.php";
		$search = "#";
		$profile = "#";
		$basket = "#";

		// Type "option-active" inside, to make option active
		$ActiveTrending = "";
		$ActiveOffers = "option-active";
		$ActiveWardrobe = "";

		include 'INC/Navbar.php'; 


// Hero-half-plain
		// copy for H1
		$h1 = "TODAY'S OFFERS";

		include 'INC/Hero-half-plain.php';  

// Article paragraph

		// $copy = "All of the latests offers in one place to explore!";

		// include 'INC/Article-paragraph.php';


?>

<div class="container">
	<div class="row">
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<img class="img-fluid" src="https://images.unsplash.com/photo-1466853817435-05b43fe45b39?dpr=2&auto=format&fit=crop&w=250&h=250&q=80&cs=tinysrgb&crop=" alt="">
			<p class="h4">H3 - offer title</p>
		</div>
	</div>
</div>



<?php

// Spacing	
		// Add a class to hide the seperation
		$hide = "";
		
		include 'INC/Spacing-mt-100.php';


// Footer
		// If current pages does not exist then add the 
		$hide = "hidden-xs-up";

		// Bread crunb for the previous page 
		$PreviousPage = " ";

		// Bread crumbs for the current page
		$CurrentPage = "Offers";		

		// JS path
		$JSPath = "JS/jquery.js";

		include 'INC/Footer.php'; 

?> 