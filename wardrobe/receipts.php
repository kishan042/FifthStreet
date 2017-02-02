<?php
// Header
		// Title tag
		$Title = "My Receipts";

		// Meta description
		$Description = "Fill text";

		// CSS path
		$CSSPath = "../CSS/Styles.css";

		// Image source
		$img = "../IMG/";

		include '../INC/Header.php';


// Navbar
		// Links to other pages
		$home = "../index.php";		
		$men = "#";
		$women = "#";
		$brands = "#";
		$about = "../about-us.php";
		$trending = "#";
		$offers = "#";
		$wardrobe = "../wardrobe.php";
		$search = "#";
		$profile = "#";
		$basket = "#";

		include '../INC/Navbar.php'; 


// Hero-half
		//IMG URL
		$url = "https://unsplash.imgix.net/photo-1414490929659-9a12b7e31907"; 
		// Amount of tint on image
		$tint = "tint-5";
		// copy for H1
		$h1 = "MY RECIEPTS";

		include '../INC/Hero-half-plain.php';  

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
		
		include '../INC/Spacing-mt-100.php';


// Footer
		// page tag
		$page = "Trending";

		// JS path
		$JSPath = "../JS/jquery.js";

		include '../INC/Footer.php'; 

?> 