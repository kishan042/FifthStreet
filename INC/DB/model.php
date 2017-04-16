<?php
function check_brand_exists($id) {

    require (ROOT_PATH . "INC/DB/db-connection.php");

    try {
        $results = $db->prepare("SELECT brand_id FROM Brands WHERE brand_id = ?");
        $results->bindParam(1,$id);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product = $results->fetchAll();

    return $product;
}

function check_offer_exists($id) {

    require (ROOT_PATH . "INC/DB/db-connection.php");

    try {
        $results = $db->prepare("SELECT offer_id FROM Offers WHERE offer_id = ?");
        $results->bindParam(1,$id);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product = $results->fetchAll();

    return $product;
}

function check_product_exists($id) {

    require (ROOT_PATH . "INC/DB/db-connection.php");

    try {
        $results = $db->prepare("SELECT product_id FROM Products WHERE product_id = ?");
        $results->bindParam(1,$id);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product = $results->fetchAll();

    return $product;
}


function get_all_offers() {

    // Connect to the database
    require (ROOT_PATH . "INC/DB/db-connection.php");

    // Try catch block to create a query to the products table
    try {
        $results = $db->query("
            SELECT offer_name, offer_id, image, alt
            FROM Offers 
            ORDER BY ord ASC"); 
    } catch (Exception $e) { // catch exception if query fails and then exit
        echo "Data could not be retrived from new database.";
        exit;
    }

    // Fetch the data in a PDO object
    $recent = $results->fetchAll(PDO::FETCH_ASSOC);

    // returns the items from the database
    return $recent;
}


function get_single_offer($id){

    // Connect to the database
    require (ROOT_PATH . "INC/DB/db-connection.php");

    // Try catch block to create a query to the products table
    try {
        $results = $db->prepare("SELECT product_name, product_id, image, alt, brand_name From Products WHERE offer_id = ? "); 
        $results->bindParam(1,$id);
        $results->execute();
        error_log("not working", true);
    } catch (Exception $e) { // catch exception if query fails and then exit
        echo "Data could not be retrived from database.";
        exit;
    }

    // Fetch the data in a PDO object
    $recent = $results->fetchAll(PDO::FETCH_ASSOC);

    // returns the items from the database
    return $recent;
}


function get_single_offer_info($id) {

    require (ROOT_PATH . "INC/DB/db-connection.php");

    try {
        $results = $db->prepare("
            SELECT *
            FROM Offers 
            WHERE offer_id = ?");
        $results->bindParam(1,$id);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product = $results->fetch(PDO::FETCH_ASSOC);

    return $product;
}


function get_all_brands() {

    // Connect to the database
    require (ROOT_PATH . "INC/DB/db-connection.php");

    // Try catch block to create a query to the products table
    try {
        $results = $db->query("
            SELECT *
            FROM Brands 
            ORDER BY brand_id ASC"); 
    } catch (Exception $e) { // catch exception if query fails and then exit
        echo "Data could not be retrived from new database.";
        exit;
    }

    // Fetch the data in a PDO object
    $recent = $results->fetchAll(PDO::FETCH_ASSOC);

    // returns the items from the database
    return $recent;
}


function get_single_brand($id) {

    require (ROOT_PATH . "INC/DB/db-connection.php");

    try {
        $results = $db->prepare("SELECT brand_name, description FROM Brands WHERE brand_id = ?");
        $results->bindParam(1,$id);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product = $results->fetch(PDO::FETCH_ASSOC);

    return $product;
}


function get_brand_cat($id) {

    // Connect to the database
    require (ROOT_PATH . "INC/DB/db-connection.php");

    // Try catch block to create a query to the products table
    try {
        $results = $db->prepare("
            SELECT *
            FROM Products 
            WHERE brand_id = ?"); 
        $results->bindParam(1,$id);
        $results->execute();
    } catch (Exception $e) { // catch exception if query fails and then exit
        echo "Data could not be retrived from new database.";
        exit;
    }

    // Fetch the data in a PDO object
    $recent = $results->fetchAll(PDO::FETCH_ASSOC);

    // returns the items from the database
    return $recent;
}


/*
 * Returns products from the DB depending on the term that may have been searched.
 * In hero-half-search module, the search tearm is appended to the url 
 * /?s=shirt -> s is the "name" set in the input tag for security purposes
 * The term is then stripped and the function is called as follows
 * $products = get_products_search($search_term);
 * $search_term is then passed as $s and if queried to the database
 * $products is then used in a foreach statement to append the results
 */

function get_products_search($s) {

    require (ROOT_PATH . "INC/DB/db-connection.php");

    // Try catch block to create a query to collect all of the products
    try {
        $results = $db->prepare("
            SELECT *
            FROM Products 
            WHERE product_description LIKE ?
            ORDER BY entry ASC");
        $results->bindValue(1, "%" . $s . "%"); 
        $results->execute();
    } catch (Exception $e) { // catch exception if query fails and then exit
        echo "Data could not be retrived from database.";
        exit;
    }

    $search_match = $results->fetchAll(PDO::FETCH_ASSOC);

    return $search_match;
}

/*
 * Returns the all products from the DB.
 * Call this function after the model.php has been included.
 * $all_products = get_all_products(); 
 * $all_products is then used in a foreach statement to append the results
 */

function get_all_products() {

// Request DB connection

    require (ROOT_PATH . "INC/DB/db-connection.php");

    // Try catch block to create a query to collect all of the products
    try {
        $results = $db->query("SELECT product_name, product_id, image, alt, brand_name From Products ORDER BY entry ASC LIMIT 44"); 

    } catch (Exception $e) { // catch exception if query fails and then exit
        echo "Data could not be retrived from database.";
        exit;
    }

    // Fetch and store the data into a PDO object
    $products = $results->fetchAll(PDO::FETCH_ASSOC);

    // Reverse the order of the array, to get the latest products at the top
    $products = array_reverse($products);

    // returns the items from the database
    return $products;

} // End of function


/*
 * Returns the recent products from the DB.
 * The code is set so that you can enter any interger in the
 * function below, and the amount of recent products will be displayed
 * Call this function after the model.php has been included.
 * $recent = get_products_recent(4); 
 */

function get_recent_products($amount) {

    // Connect to the database
    require (ROOT_PATH . "INC/DB/db-connection.php");

    // Try catch block to create a query to the products table
    try {
        $results = $db->query("SELECT product_name, product_id, image, alt, brand_name From Products ORDER BY entry ASC LIMIT $amount"); 
        error_log("not working", true);
    } catch (Exception $e) { // catch exception if query fails and then exit
        echo "Data could not be retrived from database.";
        exit;
    }

    // Fetch the data in a PDO object
    $recent = $results->fetchAll(PDO::FETCH_ASSOC);

    // returns the items from the database
    return $recent;
}


/*
 * Returns all information about a particular product from the DB 
 * All products have an id appended at the end of the url
 * /?id=101 
 * The id is then stripped and the function is called as follows
 * $product = get_single_product($product_id);
 * $product is then passed as $id below and if queried to the database
 * $products is then used in a foreach statement to append the results
 */

function get_single_product($id) {

    require (ROOT_PATH . "INC/DB/db-connection.php");

    try {
        $results = $db->prepare("
            SELECT *
            FROM Products 
            WHERE product_id = ?");
        $results->bindParam(1,$id);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product = $results->fetch(PDO::FETCH_ASSOC);

    return $product;
}

/*
 * Returns all information about a particular product from the DB 
 * All products have an id appended at the end of the url
 * /?id=101 
 * The id is then stripped and the function is called as follows
 * $product = get_single_product($product_id);
 * $product is then passed as $id below and if queried to the database
 * $products is then used in a foreach statement to append the results
 */

function get_single_product_colours($id) {


    require (ROOT_PATH . "INC/DB/db-connection.php");

    try {
        $results = $db->prepare("
            SELECT colour_name, hex
            FROM   colours
            INNER JOIN colourVal
            ON colours.colour_id=colourVal.colour_id
            WHERE product_id = ?
            ORDER BY `colour_entry`");
        $results->bindParam(1,$id);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $colour = $results->fetchAll(PDO::FETCH_ASSOC);

    return $colour;
}

/*
 * Returns the recent products from the DB.
 * The code is set so that you can enter any interger in the
 * function below, and the amount of recent products will be displayed
 * Call this function after the model.php has been included.
 * $recent = get_products_recent(4); 
 */
//SELECT product_name, product_id, image, alt, brand_name From Products ORDER BY entry ASC"); 

function get_default_souvenirs() {

    // Connect to the database
    require (ROOT_PATH . "INC/DB/db-connection.php");

    // Try catch block to create a query to the products table
    try {
        $results = $db->query("
            SELECT *
            FROM Souvenirs 
            ORDER BY souvenir_state ASC 
            LIMIT 4"); 
        error_log("not working", true);
    } catch (Exception $e) { // catch exception if query fails and then exit
        echo "Data could not be retrived from database.";
        exit;
    }

    // Fetch the data in a PDO object
    $default_souvenirs = $results->fetchAll(PDO::FETCH_ASSOC);

    // returns the items from the database
    return $default_souvenirs;
}
