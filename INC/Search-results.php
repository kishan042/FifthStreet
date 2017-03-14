<?php
// THIS MODEL ONLY WORKS WITH THE HERO-HALF-SEARCH INCLUDED ABOVE THIS CODE.
// TO MAKE THE SECOND PART OF THIS MODULE WORK, THE FOLLOWING LINE OF CODE NEEDS TO BE PASTED UNDER THE MODEL.PHP, WHEN INCLUDED. 
// $recent = get_products_recent();
?>

<?php
// This module checks if a search has been performed.
// Based on this, the results will be displayed.
// If not match can be made in the database then a message to notify the
// user, will be displayed through the else statement
?>


<div class="container">		
        <?php // if a search has been performed ...
        if ($search_term != "") {
            // If products have been found then display them
            if (!empty($products)) { 
            ?>
              <h2 class="txt-xs-center my-3">Result&rsquo;s for "<?php echo $search_term?>"</h2>

              <ul class="products block"><?php                   
                    foreach ($products as $product) {
                        include(ROOT_PATH . "INC/DB/products-block.php");
                    }
            ?></ul><?php
           
            } else {  //Else notify that no match could be found?>
            <p class="txt-xs-center"><span class="txt-bold">Result: </span>No products were found matching that search term.</p>
            <?php } ?>
        <?php } ?>
</div>



<?php
// This second part of the module displays the default condition.
// If nothing has been searched yet, the the latest four products are 
// retrived from the database to promote them to the user.
?>

<?php if ($search_term === "") : ?>
            <div class="container">
                <h2 class="txt-xs-center my-3">Latest product&rsquo;s</h2>

                <ul class="products block">
                    <?php
                        foreach($recent as $product) {
                            include(ROOT_PATH . "INC/DB/products-block.php");
                        }
                    ?>
                </ul>
            </div>
<?php endif; ?>