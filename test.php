<?php
// Config file
include_once 'INC/Config.php';

// DB - Model
include(ROOT_PATH . "INC/DB/model.php");
$recent = get_all_products();

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
        $men = MEN; 
        $women = WOMEN; 
        $brands = BRANDS; 
        $about = ABOUT; 
        $trending = "#"; 
        $offers = OFFERS; 
        $wardrobe = WARDROBE; 
        $search = SEARCH; 
        $profile = PROFILE; 
        $basket = BASKET; 


        // Type "option-active" inside, to make option active
        $ActiveTrending = "option-active";
        $ActiveOffers = "";
        $ActiveWardrobe = "";       

        include (ROOT_PATH . 'INC/Navbar.php');


// Hero-half
        //IMG URL
        //$url = "https://unsplash.imgix.net/photo-1414490929659-9a12b7e31907"; 
        // Amount of tint on image
        $tint = "tint-10";
        // copy for H1
        $h1 = "TRENDING";

        include (ROOT_PATH . 'INC/Hero-half.php');



// Spacing  
        // Add a class to hide the seperation
        $hide = "";
        
        include (ROOT_PATH . 'INC/Spacing-mt-100.php');

?>
<style>
  /*  
    .products {
  -webkit-columns: 400px;
  -moz-columns: 400px;
  columns: 400px;
  -webkit-column-gap: 2em;
  -moz-column-gap: 2em;
  column-gap: 2em;  
}

ul.products li {
  list-style: none;
  background: white;
  padding: 1em;
  margin-bottom: 1px;
  -webkit-column-break-inside: avoid;
  page-break-inside: avoid;
  break-inside: avoid;*/
}
</style>





<ul class="products">
    <li>
        <a href="#">
            <img class="img-fluid" src="https://images.unsplash.com/photo-1481824429379-07aa5e5b0739?q=0" alt="">
            <p>View Details</p>
        </a>
    </li>
    <li>
        <a href="#">
            <img class="img-fluid" src="IMG/shirts/shirt-102.jpg" alt="">
            <p>View Details</p>
        </a>
    </li>
    <li>
        <a href="#">
            <img class="img-fluid" src="http://placehold.it/250x450" alt="">
            <p>View Details</p>
        </a>
    </li>
    <li>
        <a href="#">
            <img class="img-fluid" src="IMG/shirts/shirt-101.jpg" alt="">
            <p>View Details</p>
        </a>
    </li>
    <li>
        <a href="#">
            <img class="img-fluid" src="IMG/shirts/shirt-105.jpg" alt="">
            <p>View Details</p>
        </a>
    </li>
    <li>
        <a href="#">
            <img class="img-fluid" src="http://placehold.it/250x250" alt="">
            <p>View Details</p>
        </a>
    </li>
    <li>
        <a href="#">
            <img class="img-fluid" src="http://placehold.it/250x200" alt="">
            <p>View Details</p>
        </a>
    </li>
</ul>


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
