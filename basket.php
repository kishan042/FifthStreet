<?php
ini_set('display_errors', 1);
error_reporting(~0);
// Config file
include_once 'INC/Config.php';

// Header
		// Title tag
		$Title = "My Basket ";
		// Meta description
		$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";

		// CSS path
		$CSSPath = BASE_URL . "CSS/Styles.css";
		
		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');

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
		$basket = "#"; 

		include (ROOT_PATH . 'INC/Navbar.php'); 


// Model - DB

		include (ROOT_PATH . 'INC/DB/model.php');
        $recent = get_products_recent();
?>


                <h2>Mike&rsquo;s Latest Shirts</h2>
                
                <ul class="products block">
                    <?php
                        foreach(array_reverse($recent) as $product) {
                            include(ROOT_PATH . "INC/DB/product-block.php");
                        }
                    ?>
                </ul>

<style>
	#search-icon {
		padding: 5px;
	    width: 60px;
    height: 60px;
		background: url(IMG/icons/search.svg) no-repeat;
			background-size: cover;
	background-position: center;
	background-origin: content-box;
	}
</style>


<form method="get" action="./">
	<?php // pre-populate the current search term in the search box; ?>
	<?php // if a search hasn't been performed, then that search term ?>
	<?php // will be blank and the box will look empty ?>
	<div class="row">
		<div class="col-lg-5">
			<div class="input-group">
				<input type="text" class="form-control" name="s" value="">
				<span class="input-group-btn">
					<button id="search-icon" class="btn btn-secondary" type="submit" value="">
				
				</span>
			</div>
		</div>
	</div>
</form> 




