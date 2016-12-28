<?php
// Variables - Start

// Title tag
$Title = "Home ";
// Meta description
$Description = "Experience a true seamless experience in-store or online by discovering the latest footwear, clothing collections and brands with Fifth Street.";

// CSS path
$CSSPath = "CSS/Styles.css";
// Image source
$img = "IMG/";
// Variables - End
?>
<style>



</style>

<?php include 'INC/Header.php'; ?> 
<div class="navigation-bar">
<div class="mob-primary-nav bg-white"><!-- Primary Nav -->
	<ul class="pl-0 primary-options">
		<li><img class="nav-toggle-btn" src="IMG/icons/hamburger.svg"></li>
		<li><img src="IMG/icons/user.svg"></li>
		<li><img src="IMG/icons/logo.svg" style="width:25%"></li>
		<li><img src="IMG/icons/search.svg"></li>
		<li><img src="IMG/icons/basket.svg"></li>
	</ul>
</div>
<div class="mob-secondary-nav bg-gray-lightest"><!-- Secondary Nav -->
	<ul class="secondary-options row mx-0 pl-0">
		<li class="col-xs-4 text-xs-center p-medium option-active">TRENDING</li>
		<li class="col-xs-4 text-xs-center p-medium">OFFERS</li>
		<li class="col-xs-4 text-xs-center p-medium">WARDROBE</li>
	</ul>
</div>
</div>
<nav><!-- Hamburger menu to be hidden -->  
	<ul>
		<li><a href="#">For Home</a></li>
		<li><a href="#">For Business</a></li>
		<li><a href="#">Support</a></li>
		<li><a href="#">Where to Buy</a></li>
	</ul>
</nav>





<?php include 'INC/Footer.php';?> 