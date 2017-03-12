<?php
// Config file
		include_once 'INC/DB/Config.php';

// DB - Model
		include(ROOT_PATH . "INC/DB/model.php");
		//$default_souvenirs = get_default_souvenirs();

// Header
		// Title tag
		$Title = "test5";

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

		include (ROOT_PATH . 'INC/Navbar.php'); 


$data = array('101', '102', '103', '104', '105', '106', '108');
$Count = count($data);

$limit = "?limit=" . $Count . "&";
//echo http_build_query($data) . "\n";
//echo http_build_query($data, 'p_id');

$query = http_build_query($data, 'id');
//$query = preg_replace('/%5B[0-9]+%5D/simU', '%5B%5D', $query);


?>

<a href="test5.php<?php echo $limit . $query ?>">
	<p class="p-3"><?php echo $query ?></p>
	<!-- <p><?php echo parse_url($data); ?></p> -->
</a> 




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
		$CurrentPage = "My Souvenirs";

		// JS path
		$JSPath = BASE_URL . "JS/jquery.js";

		include (ROOT_PATH . 'INC/Footer.php');





	$length = $_GET["limit"];
	for ($i = 0; $i <= $length; $i++) {
	    if (isset($_GET["id".$i])) {
		    $test = $_GET["id".$i];
			//echo "<script>console.log('it works')</script>";
			echo "<script>console.log('" .$test. "')</script>";
			echo "<script>validate_Product_Id('".$test."')</script>";

	    }
	}




?>

<script>
    // collect ids from local storage
    var email = localStorage.getItem('wishlist');

    console.log(email);
</script>
<?php





































