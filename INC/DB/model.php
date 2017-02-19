<?php

/*
 * Returns the four most recent products, using the order of the elements in the array
 * @return   array           a list of the last four products in the array;
                             the most recent product is the last one in the array
 */
function get_products_recent() {

    require (ROOT_PATH . "INC/DB/db-connection.php");

    // Try catch block to create a qury to the products table
    try {
        $results = $db->query("
            SELECT name, price, img, sku, paypal 
            FROM products 
            ORDER BY sku DESC 
            LIMIT 4"); 

    } catch (Exception $e) { // catch exception if query fails and then exit
        echo "Data could not be retrived from database.";
        exit;
    }

    // // Following code to view the query in an array format
    $recent = $results->fetchAll(PDO::FETCH_ASSOC);

    $recent = array_reverse($recent);

    // returns the items from the database
    return $recent;
}

/*
 * looks for a search term in the product names
 * @param    string    $s    the search term
 * @return   array           a list of the products that contain the search term in their name
 */
function get_products_search($s) {

    require (ROOT_PATH . "INC/DB/db-connection.php");

    // Try catch block to create a query to collect all of the products
    try {
        $results = $db->prepare("
            SELECT name, price, img, sku, paypal 
            FROM products 
            WHERE name LIKE ?
            ORDER BY sku ASC");
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
 * Counts the total number of products
 * @return   int             the total number of products
 */
function get_products_count() {
    return count(get_products_all());
}

/*
 * Returns a specified subset of products, based on the values received,
 * using the order of the elements in the array .
 * @param    int             the position of the first product in the requested subset 
 * @param    int             the position of the last product in the requested subset 
 * @return   array           the list of products that correspond to the start and end positions
 */
function get_products_subset($positionStart, $positionEnd) {
    $subset = array();
    $all = get_products_all();

    $position = 0;
    foreach($all as $product) {
        $position += 1;
        if ($position >= $positionStart && $position <= $positionEnd) {
            $subset[] = $product;
        }
    }
    return $subset;
}

/*
 * Returns the full list of products. This function contains the full list of products,
 * and the other model functions first call this function.
 * @return   array           the full list of products
 */
function get_all_products() {

// Request DB connection

    require (ROOT_PATH . "INC/DB/db-connection.php");

    // Try catch block to create a query to collect all of the products
    try {
        $results = $db->query("SELECT name, price, img, sku, paypal From products ORDER BY sku ASC"); 

    } catch (Exception $e) { // catch exception if query fails and then exit
        echo "Data could not be retrived from database.";
        exit;
    }

    // Store the arrary into a variable
    $products = $results->fetchAll(PDO::FETCH_ASSOC);

    // returns the items from the database
    return $products;

} // End of function




/*
 * Returns an array of product information for the product that matches the sku;
 * returns a boolean false if no product matches the sku
 * @param    int      $sku     the sku
 * @return   mixed    array    list of product information for the one matching product
 *                    bool     false if no product matches
 */


function get_product_single($sku) {

    require (ROOT_PATH . "INC/DB/db-connection.php");

    try {
        $results = $db->prepare("SELECT name, price, img, sku, paypal FROM products WHERE sku = ?");
        $results->bindParam(1,$sku);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $product = $results->fetch(PDO::FETCH_ASSOC);
    
    if ($product === false) return $product;

    $product["sizes"] = array();

    try {
        $results = $db->prepare("
            SELECT size
            FROM   products_sizes ps
            INNER JOIN sizes s ON ps.size_id = s.id
            WHERE product_sku = ?
            ORDER BY `order`");
        $results->bindParam(1,$sku);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
        $product["sizes"][] = $row["size"];
    }

    return $product;
}

?>
