<?php
ini_set('display_errors', 1);
error_reporting(~0);
// Config file
include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "Test 3 ";
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
?>

<style>
	.style { 
		display: inline-block;
		margin: 25px;
	 }
</style>

<li class="style">
<p>102</p>
<button class="add-to-wishlist" id="102">+</button>
</li>

<li class="style">
<p>118</p>
<button class="add-to-wishlist" id="118">+</button>
</li>

<li class="style">
<p>102</p>
<button class="remove-from-wishlist" id="102">-</button>
</li>

<li class="style">
<p>118</p>
<button class="remove-from-wishlist" id="118">-</button>
</li>

<li class="style">
<p>Men</p>
<button class="add-souvenir" id="118">+ Souvenir +</button>
</li>

<li class="style">
<p>Men</p>
<button class="remove-souvenir" id="118">- Souvenir -</button>
</li>

<?php 
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?> 

<a href="https://www.facebook.com/sharer/sharer.php?u=">Share on Facebook</a>
<!-- http://www.facebook.com/sharer/sharer.php?u=https://kyusuf.com/post/completely-css-tabs&title=Completely CSS: Tabs -->
<a href="https://twitter.com/home?status=">Share on Twitter</a>

<?php



$limit = 2;
$link = "&id0=1234&id1=1233";

$message = " Name: Kishan <br>" . 
		   "\r\n Email: test@test.com <br>" . 
		   "\r\n <br>" . 
		   "\r\n Hi Kishan, <br>" .
		   "\r\n Thank you for shopping with us today. Click on the link below to view your E-receipt. <br>" .
		   "\r\n Remember you can also return and exchange any of the products purchased from the link below as well ! <br>" .
		   "\r\n <br>" .
		   '<a style="color:#48d8d8;" href="http://thefifthstreet.com/wardrobe/receipts.php' . $limit . $link . '">' . "Collect E-receipt" . '</a><br>' .
		   "\r\n <br>" .
		   "\r\n Have a great day, <br>" .
		   "\r\n The Fifth Street Team. <br>";



$test ='<a class="txt-gem" href="http://thefifthstreet.com/wardrobe/receipts.php">' . "Collect E-receipt" . '</a>';
echo $test;
echo "<br>";
echo "<br>";
echo $message;

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