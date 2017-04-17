<?php

// Config file
		include_once 'INC/DB/Config.php';	

// Header
		// Title tag
		$Title = "Admin ";
		// Meta description
		$Description = "Admin";
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


// Spacing	
		include 'INC/Spacing-mt-100.php';

// Blocks-two-left-compact
				// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "Clear Wishlist";
		// Copy
		//$BlockText = "Congratulations! As a reward please claim a free souvenir by clicking on the claim button below";
		// type 'hide' to remove the button
		$hideCTA = " ";
		// Link for CTA
		//$BlockLink = BASE_URL . "wardrobe/souvenirs.php?sou=1437";
		// CTA copy
		$BlockCTA = "clear";
		// Image URL
		$BlockIMG = $img ."souvenirs/collection/plaza-collection.jpg";
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-6 <?php echo $BlockBG?>">
			<div class="txt-block-half">
				<h2 class="txt-xs-center"><?php echo $BlockTitle ?></h2>
				<p class="mt-40 mb-0"><?php echo $BlockText ?></p>
				<a href="<?php echo $BlockLink ?>">
					<button class="mt-2 tertiary-btn-small <?php echo $hideCTA ?>"  onclick="clearWishlist()">
					<?php echo $BlockCTA ?></button>
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 image-block-half px-0">
			<div class="img-half" style="background-image: url(<?php echo $BlockIMG ?>)"></div>
		</div>
	</div>
</div>
<?php 

// Blocks-two-right-compact
		// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "Clear Souvenirs";
		// Copy
		//$BlockText = "Returns are always free, so take full advantage of returning products through your e-receipts. ";
		// type 'hide' to remove the button
		$hideCTA = " ";
		// Link for CTA
		//$BlockLink = BASE_URL . "wardrobe/receipts.php";
		// CTA copy
		//$BlockCTA = "View E-Receipt";
		// Image URL
		$BlockIMG = $img ."home/returning-and-exchanging-products.jpg";

?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-6 image-block-half px-0">
			<div class="img-half" style="background-image: url(<?php echo $BlockIMG ?>)"></div>
		</div>
		<div class="col-xs-12 col-md-6 <?php echo $BlockBG?>">
			<div class="txt-block-half">
				<h2 class="txt-xs-center"><?php echo $BlockTitle ?></h2>
				<p class="mt-40 mb-0"><?php echo $BlockText ?></p>
				<a href="<?php echo $BlockLink ?>">
					<button class="mt-2 tertiary-btn-small <?php echo $hideCTA ?>" 
					onclick="clearSouvenirs()">
					<?php echo $BlockCTA ?></button>
				</a>
			</div>
		</div>
	</div>
</div>
<?php 

// Blocks-two-left-compact
				// Background colour class for text
		$BlockBG = "bg-gray-lightest";
		// Title
		$BlockTitle = "Clear E-Receipts";
		// Copy
		//$BlockText = "Congratulations! As a reward please claim a free souvenir by clicking on the claim button below";
		// type 'hide' to remove the button
		$hideCTA = " ";
		// Link for CTA
		//$BlockLink = BASE_URL . "wardrobe/souvenirs.php?sou=1437";
		// CTA copy
		//$BlockCTA = "View Souvenir";
		// Image URL
		$BlockIMG = $img ."souvenirs/collection/plaza-collection.jpg";

?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-6 <?php echo $BlockBG?>">
			<div class="txt-block-half">
				<h2 class="txt-xs-center"><?php echo $BlockTitle ?></h2>
				<p class="mt-40 mb-0"><?php echo $BlockText ?></p>
				<a href="<?php echo $BlockLink ?>">
					<button class="mt-2 tertiary-btn-small <?php echo $hideCTA ?>" 
					onclick="clearReceipt()">
					<?php echo $BlockCTA ?></button>
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 image-block-half px-0">
			<div class="img-half" style="background-image: url(<?php echo $BlockIMG ?>)"></div>
		</div>
	</div>
</div>
<?php 


// Spacing	
		include 'INC/Spacing-mt-100.php';


// Footer
		// If current pages does not exist then add the 
        $hide = "hidden-xs-up";

        // Bread crunb for the previous page 
        $PreviousPage = "";

        // Bread crumbs for the current page
        $CurrentPage = "Thank You";

		include (ROOT_PATH . 'INC/Footer.php');
?>
<script>
function clearWishlist() {
    localStorage.removeItem('wishlist');
    alert('cleared wishlist');
}
function clearSouvenirs() {
    localStorage.removeItem('souvenirs');
    alert('cleared souvenirs');
}
function clearReceipt() {
    localStorage.removeItem('Receipt');
    alert('cleared receipts');
}
</script>