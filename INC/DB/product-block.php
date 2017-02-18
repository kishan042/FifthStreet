<?php

/* This file displays a single product in a list view. It needs to receive
 * the following product details (as elements of an array named $product): 
 *     - sku:  Product ID, used to create the link to the Shirt Details page
 *     - img:  The web address of the main image for the product
 *     - name: The name of the 
 */

?><li>
        <a href="<?php echo BASE_URL; ?>/product/#<?php echo $product["sku"]; ?>/">
            <img class=img-fluid src="<?php echo BASE_URL . $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
            <h2 class="product-title">Product title</h2>
            <h3 class="brand-title">Brand title</h3>
        </a>
    </li>


