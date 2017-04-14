<?php

/* This file displays a single product in a list view. It needs to receive
 * the following product details (as elements of an array named $product): 
 *     - sku:  Product ID, used to create the link to the Shirt Details page
 *     - img:  The web address of the main image for the product
 *     - name: The name of the 
 */

?><li>
        <a href="<?php echo BASE_URL . $souvenir["souvenir_link"]; ?>">
            <img class="img-fluid" src="<?php echo BASE_URL . $souvenir["image"]; ?>" alt="<?php echo $souvenir["alt"]; ?>">
            <h2 class="product-title"><?php echo $souvenir["souvenir_name"]; ?></h2>
            <h3 class="brand-title">by <?php echo $souvenir["brand_name"]; ?></h3>
        </a>
    </li>