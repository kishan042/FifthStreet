<?php

// References every web address (when we need to access links or images like CSS  files or images)
define("BASE_URL","/_Github/FifthStreet/");
// References a specific path to a file on the server (include any php file)
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/_Github/FifthStreet/");

// URL structure of the site
define("MEN","men.php");
define("WOMEN","women.php");
define("BRANDS","brands.php");
define("ABOUT","about-us.php");
define("TRENDING","trending.php");
define("OFFERS","offers.php");
define("WARDROBE","wardrobe.php");
define("SEARCH","search/");
define("PROFILE","profile.php");
define("BASKET","basket.php");

// Details to Connect to the database 
define("DB_HOST", "localhost");
define("DB_NAME", "shirts4mike");
define("DB_PORT", "8889"); // default 3306
define("DB_USER", "root");
define("DB_PASS", "root");
?>

