<?php
// Config file
include_once '../INC/Config.php';

// Header
		// Title tag
		$Title = "My Receipts";

		// Meta description
		$Description = "Fill text";

		// CSS path
		$CSSPath = BASE_URL . "CSS/Styles.css";

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
		// copy for H1
		$h1 = "MY RECIEPTS";

		include (ROOT_PATH . 'INC/Hero-half-plain.php');

?>


<style>
/*	.col-xs-3 { padding: 0!important; }
	.col-lg-3 { width: 400px !important;}*/
	h2, h3 { width: 100%!important;  }
	.product-block { width: 250px!important; }
</style>

<div class="container">
	<div class="row">
		<div class="col-xs-3"> <!-- start of first column -->
			<div class="col-lg-3">
				<img src="http://placehold.it/250x250" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
			<div class="col-lg-3">
				<img src="http://placehold.it/250x350" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
			<div class="col-lg-3">
				<img src="http://placehold.it/250x250" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
			<div class="col-lg-3">
				<img src="http://placehold.it/250x350" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
		</div> <!-- End of first column -->
		<div class="col-xs-3"> <!-- start of first column -->
			<div class="col-lg-3">
				<img src="http://placehold.it/250x450" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
			<div class="col-lg-3">
				<img src="http://placehold.it/250x350" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
			<div class="col-lg-3">
				<img src="http://placehold.it/250x250" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
			<div class="col-lg-3">
				<img src="http://placehold.it/250x350" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
		</div> <!-- End of first column -->
		<div class="col-xs-3"> <!-- start of first column -->
			<div class="col-lg-3">
				<img src="http://placehold.it/250x250" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
			<div class="col-lg-3">
				<img src="http://placehold.it/250x350" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
			<div class="col-lg-3">
				<img src="http://placehold.it/250x450" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
		</div> <!-- End of first column -->
		<div class="col-xs-3"> <!-- start of first column -->
			<div class="col-lg-3">
				<img src="http://placehold.it/250x450" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
			<div class="col-lg-3">
				<img src="http://placehold.it/250x450" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
			<div class="col-lg-3">
				<img src="http://placehold.it/250x250" alt="">
				<div class="product-block">
					<h2 class="h3">Product title</h2>
					<h3 class="h4">Brand</h3>
				</div>
			</div>
		</div> <!-- End of first column -->
	</div>
</div>





<?php

// Spacing	
		// Add a class to hide the seperation
		$hide = "";
		
		include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer
		// If current pages does not exist then add the 
		$hide = " ";

		// Bread crunb for the previous page 
		$PreviousPage = "Wardrobe";

		// Bread crumbs for the current page
		$CurrentPage = "Reciepts";		

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php');

?> 