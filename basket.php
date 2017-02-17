<?php
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

		include (ROOT_PATH . 'INC/databse/model.php');
        $recent = get_products_all();
?>

<div class="section shirts page">
	<div class="wrapper">
		<h1>Mike&rsquo;s Full Catalog of Shirts</h1>
			<ul class="products">
			<?php
				foreach($recent as $product) {
					include(ROOT_PATH . "INC/database/product-list.php");
				}
			?>
			</ul>
	</div>
</div> 



