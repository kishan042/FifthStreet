<?php
ini_set('display_errors', 1);
error_reporting(~0);

// a $product will only be set if an ID is specified in the query
// string and it corresponds to a real product. If no product is
// set, then redirect to the shirts listing page; otherwise, continue
// on and display the Shirt Details page for that $product
if (empty($_GET["id"])) {
	header("Location: http://localhost:8888/_Github/FifthStreet/trending.php" );
	exit();
}

// Config file
	require_once("INC/Config.php");

// DB - Model
	require_once(ROOT_PATH . "INC/DB/model.php");


// if an ID is specified in the query string, use it
if (isset($_GET["id"])) {
	$product_id = intval($_GET["id"]);
	$product = get_single_product($product_id);
} 


// Header
        // Title tag
        $Title = "Trending ";
        
        // Meta description
        $Description = "Fill text";

        // CSS path
        $CSSPath = BASE_URL . "CSS/Styles.css";
        
        // Image source
        $img = BASE_URL . "IMG/";

        include (ROOT_PATH . 'INC/Header.php');


// Navbar
        // Links to other pages 
        $men = BASE_URL . MEN; 
        $women = BASE_URL . WOMEN; 
        $brands = BASE_URL . BRANDS; 
        $about = BASE_URL . ABOUT; 
        $trending = BASE_URL . TRENDING; 
        $offers = BASE_URL . OFFERS; 
        $wardrobe = BASE_URL . WARDROBE; 
        $search = BASE_URL . SEARCH; 
        $profile = BASE_URL . PROFILE; 
        $basket = BASE_URL . BASKET;     

        include (ROOT_PATH . 'INC/Navbar.php');


// Hero-half
        //IMG URL
        //$url = "https://unsplash.imgix.net/photo-1414490929659-9a12b7e31907"; 
        // Amount of tint on image
        $tint = "tint-10";
        // copy for H1
        $h1 = $product["name"];

        include (ROOT_PATH . 'INC/Hero-half.php');



// Spacing  
        // Add a class to hide the seperation
        $hide = "";
        
        include (ROOT_PATH . 'INC/Spacing-mt-100.php');

?>

<h1>Product = <?php echo $product["name"] ?></h1>
<h2>Price = £<?php echo $product["price"] ?></h2>
<img src="<?php echo BASE_URL . $product["img"] ?>" alt="<?php echo $product["name"] ?>">

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
	<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
	<table>
	<tr>
		<th>
			<input type="hidden" name="on0" value="Size">
			<label for="os0">Size</label>
		</th>
		<td>
			<select name="os0" id="os0">
				<?php foreach($product["sizes"] as $size) { ?>
				<option value="<?php echo $size; ?>"><?php echo $size; ?> </option>
				<?php } ?>
			</select>
		</td>
	</tr>
	</table>
	<input type="submit" value="Add to Cart" name="submit">
</form>

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
        $CurrentPage = "Trending";
        

        // JS path
        $JSPath = BASE_URL . "JS/jquery.js";

        include (ROOT_PATH . 'INC/Footer.php');

?> 

