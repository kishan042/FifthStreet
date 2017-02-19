<?php
ini_set('display_errors', 1);
error_reporting(~0);

// Config file
	require_once("../INC/Config.php");

// DB - Model
	require_once(ROOT_PATH . 'INC/DB/model.php');
	// Call function to get the 4 recent products in the database
    $recent = get_products_recent();

/* This file contains instructions for three different states of the form:
 *   - Displaying the initial search form
 *   - Handling a form submission and ...
 *       - ... displaying the results if matches are found.
 *       - ... displaying a "no results found" message if necessary.
 */

// if a non-blank search term is specified in
// the query string, perform a search
$search_term = "";
if (isset($_GET["s"])) {
	$search_term = trim($_GET["s"]);
	if ($search_term != "") {
		require_once(ROOT_PATH . "INC/DB/model.php");
		$products = get_products_search($search_term);
	} else {
		//include (ROOT_PATH . 'INC/DB/model.php');
        $recent = get_products_recent();
	}
}


// Header
        // Title tag
        $Title = "Search ";
        
        // Meta description
        $Description = "Fill text";

        // CSS path
        $CSSPath = BASE_URL . "CSS/Styles.css";
        
        // Image source
        $img = BASE_URL . "IMG/";

        include (ROOT_PATH . 'INC/Header.php');


// Navbar
        // Links to other pages 
        $men = "../" . MEN; 
        $women = "../" . WOMEN; 
        $brands = "../" . BRANDS; 
        $about = "../" . ABOUT; 
        $trending = "../" . TRENDING; 
        $offers = "../" . OFFERS; 
        $wardrobe = "../" . WARDROBE; 
        $search = "#"; 
        $profile = "../" . PROFILE; 
        $basket = "../" . BASKET; 
     

		// Hide navbar.php tablet devices and down
		$search_override = "hidden-sm-down";

        include (ROOT_PATH . 'INC/Navbar.php');


// Hero-half-search
        //IMG URL
        $url = "https://unsplash.imgix.net/photo-1414490929659-9a12b7e31907"; 
        // Amount of tint on image
        $tint = "tint-5";
        // copy for H1
        $h1 = "SEARCH";

        include (ROOT_PATH . 'INC/Hero-half-search.php');


// Spacing  
        // Add a class to hide the seperation
        $hide = "";
        
        include (ROOT_PATH . 'INC/Spacing-mt-100.php');





?>


<div class="container">
						
	

			<?php // if a search has been performed ... ?>
			<?php if ($search_term != "") : ?>

				<?php // if there are products found that match the search term, display them; ?>
				<?php // otherwise, display a message that none were found ?>

				<?php if (!empty($products)) : ?>
					<ul class="products block">
						<?php
							foreach ($products as $product) {
	                            include(ROOT_PATH . "INC/DB/product-block.php");
							}
						?>
					</ul>
				<?php else: ?>
					<p>No products were found matching that search term.</p>
				<?php endif; ?>

			<?php endif; ?>

</div>


			<?php if ($search_term === "") : ?>
				<div class="container">
					<h2>Mike&rsquo;s Latest Shirts</h2>

					<ul class="products block">
					    <?php
					        foreach(array_reverse($recent) as $product) {
					            include(ROOT_PATH . "INC/DB/product-block.php");
					        }
					    ?>
					</ul>
				</div>
			<?php endif; ?>


<?php
// Spacing  
        // Add a class to hide the seperation
        $hide = "";
        
        include (ROOT_PATH . 'INC/Spacing-mt-100.php');


// Footer
        // If current pages does not exist then add the 
        $hide = "hidden-xs-up";

        // Bread crunb for the previous page 
        $PreviousPage = "";

        // Bread crumbs for the current page
        $CurrentPage = "Search";
        

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php');

?> 
