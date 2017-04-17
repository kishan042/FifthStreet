<?php  //<!-- Sass file = _product.scss --> ?>
<div class="simpleCart_shelfItem">
    <div class="row mt-30">
            <!-- Product image block -->
            <div class="product-img-block col-xs-12 offset-md-1 col-md-5 offset-xl-1 col-xl-6 mr-2">
                    <div>
                        <img id="<?php echo $product["colour_int"]?>"
                            class="img-fluid img-center item_image" 
                            src="<?php echo BASE_URL . $product["image"] ?>" 
                            alt="<?php echo $product["product_description"] ?>"/>
                    </div>

                    <div class="mt-30 hidden-xl-up">
                            <ul class="colours-flex-center">
                                <?php
                                    foreach($product_colors as $color) {
                                        include(ROOT_PATH . "INC/DB/color-list.php");
                                    }
                                ?>
                            </ul>
                    </div>
            </div>
            <!-- Product details block -->
            <div class="col-xs-12 col-md-5 col-lg-4 offset-lg-1 offset-xl-0 col-xl-3 desk-product-details">
                    <!-- Product title -->
                    <h1 class="h2-alt txt-xs-center txt-md-left txt-black mt-20 item_name">
                            <?php echo $product["product_name"] ?>
                    </h1>  
                    <!-- Price & Brand name -->
                    <div class="row mt-10">
                            <div class="col-xs-4 px-0">
                                   <h2 class="h3-alt txt-xs-center txt-md-left item_price">£<?php echo $product["price"]?></h2>
                            </div>
                            <div class="col-xs-4 col-md-2 px-0">
                                    <h3 class="txt-xs-center txt-md-left">|</h3>
                            </div>
                            <div class="col-xs-4 px-0">
                                    <a href="<?php echo BASE_URL . 'brands/?Branid=' . $product["brand_id"] ?>">
                                        <h2 class="h3-alt txt-xs-center txt-md-left">by <?php echo $product["brand_name"] ?>
                                        </h2>
                                    </a>
                            </div>      
                    </div>
                    <div class="hidden-md-up mt-30">
                            <h2 class="h3">Stock</h2>
                            <ul class="mt-20">
                                    <h2 class="h3-alt txt-gem"><?php echo $product["stock"] ?> available in-store</h2>
                                    <h2 class="h4">5 available online</h2>
                            </ul>
                    </div>
                    <div class="mt-30 primary-colour-set hidden-lg-down">
                            <h2 class="h3">Colours</h2>
                            <ul class="mt-20 colours-flex-center">
                                <?php
                                    foreach($product_colors as $color) {
                                        include(ROOT_PATH . "INC/DB/color-list.php");
                                    }
                                ?>
                            </ul>
                    </div>  
                    <?php if ($product["size_type"] == 'specific-M') { ?>
                                    <div class="mt-10">
                                            <h2 class="h3">Sizes</h2>
                                            <div class="row mt-20">
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 id="men-shoes" class="gender-option gender-selected">Men</h3>
                                                    </div>
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 id="women-shoes" class="gender-option">Women</h3>  
                                                    </div>
                                            </div>
                                            <ul class="men-shoe-sizes size-flex-center">
                                                    <li class="product-size">6</li>
                                                    <li class="product-size">7</li>
                                                    <li class="product-size">8</li>
                                                    <li class="product-size">9</li>
                                                    <li class="product-size">10</li>
                                                    <li class="product-size">11</li>
                                                    <li class="product-size">12</li>
                                                    <li class="product-size">13</li>
                                                    <li class="product-size">14</li>
                                                    <li class="product-size">15</li>
                                            </ul>
                                            <ul class="women-shoe-sizes hide size-flex-center">
                                                    <li class="product-size">2</li>
                                                    <li class="product-size">3</li>
                                                    <li class="product-size">4</li>
                                                    <li class="product-size">5</li>
                                                    <li class="product-size">6</li>
                                                    <li class="product-size">7</li>
                                                    <li class="product-size">8</li>
                                                    <li class="product-size">9</li>
                                                    <li class="product-size">10</li>
                                            </ul>
                                    </div>
                    
                    <?php }  else if ($product["size_type"] == 'specific-F') { ?>
                                    <div class="mt-10">
                                            <h2 class="h3">Sizes</h2>
                                            <div class="row mt-20">
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 id="men-shoes" class="gender-option">Men</h3>
                                                    </div>
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 id="women-shoes" class="gender-option gender-selected">Women</h3>  
                                                    </div>
                                            </div>
                                            <ul class="men-shoe-sizes size-flex-center">
                                                    <li class="product-size">6</li>
                                                    <li class="product-size">7</li>
                                                    <li class="product-size">8</li>
                                                    <li class="product-size">9</li>
                                                    <li class="product-size">10</li>
                                                    <li class="product-size">11</li>
                                                    <li class="product-size">12</li>
                                                    <li class="product-size">13</li>
                                                    <li class="product-size">14</li>
                                                    <li class="product-size">15</li>
                                            </ul>
                                            <ul class="women-shoe-sizes hide size-flex-center">
                                                    <li class="product-size">2</li>
                                                    <li class="product-size">3</li>
                                                    <li class="product-size">4</li>
                                                    <li class="product-size">5</li>
                                                    <li class="product-size">6</li>
                                                    <li class="product-size">7</li>
                                                    <li class="product-size">8</li>
                                                    <li class="product-size">9</li>
                                                    <li class="product-size">10</li>
                                            </ul>
                                    </div>

                     <?php }  else if ($product["size_type"] == 'general') { ?>
                                    <div class="mt-10">
                                            <h2 class="h3">Sizes</h2>
                                            <ul class="mt-20 size-flex-center">
                                                    <li class="product-size">XS</li>
                                                    <li class="product-size">SM</li>
                                                    <li class="product-size">MD</li>
                                                    <li class="product-size">LG</li>
                                            </ul>
                                    </div>

                     <?php }  else if ($product["size_type"] == 'general-M') { ?>
                                    <div class="mt-10">
                                            <h2 class="h3">Sizes</h2>
                                            <div class="row mt-20">
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 class="gender-option gender-selected">Men</h3>
                                                    </div>
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 class="gender-option">Women</h3>  
                                                    </div>
                                            </div>
                                            <ul class="size-flex-center">
                                                    <li class="product-size">XS</li>
                                                    <li class="product-size">SM</li>
                                                    <li class="product-size">MD</li>
                                                    <li class="product-size">LG</li>
                                            </ul>
                                    </div>

                     <?php }  else if ($product["size_type"] == 'general-F') { ?>
                                    <div class="mt-10">
                                            <h2 class="h3">Sizes</h2>
                                            <div class="row mt-20">
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 class="gender-option">Men</h3>
                                                    </div>
                                                    <div class="col-xs-6 txt-xs-center gender-selection">
                                                            <h3 class="gender-option gender-selected">Women</h3>  
                                                    </div>
                                            </div>
                                            <ul class="size-flex-center">
                                                    <li class="product-size">XS</li>
                                                    <li class="product-size">SM</li>
                                                    <li class="product-size">MD</li>
                                                    <li class="product-size">LG</li>
                                            </ul>
                                    </div>
                     <?php } ?>
  
                    <!-- Set of 3 CTA's -->
                    <div class="row mt-50">
                            <div class="col-xs-2 px-0">
                                    <div id="<?php echo $product["product_id"] ?>" class="add-to-wishlist circle-btn-add tooltip">
                                        <span class="tooltiptext">Add to Wishlist</span>
                                        <div class="arrow-down"></div>
                                    </div>

                                    <div id="<?php echo $product["product_id"] ?>" class="remove-from-wishlist circle-btn-remove hide tooltip">
                                        <span class="tooltiptext">Remove</span>
                                        <div class="arrow-down"></div>
                                    </div>
                            </div>
                            <div class="col-xs-8 px-0">
                                       <button id="<?php echo $product["product_id"]; ?>" class="h3-alt tertiary-btn-small btn-brand-cta">
                                           Exchange
                                       </button>
                            </div>
                            <div class="col-xs-2 px-0">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=">
                                     <div id="<?php echo $product["product_id"]; ?>" class="circle-btn-share product-share tooltip">
                                         <span class="tooltiptext">Share</span>
                                         <div class="arrow-down"></div> 
                                     </div> 
                                </a>
                            </div>
                    </div>
            </div> 
    </div>
    <div class="container">
            <hr class="hidden-sm-down mt-70">
                    <div class="row mt-20">
                            <div class="col-xs-12 col-md-6">
                                    <hr class="mt-40 hidden-md-up">
                                    <h2 class="mt-40 txt-xs-center">Product description</h2>
                                    <p class="mt-20">Product ID: 
                                        <span class="item_id">
                                            <?php echo $product["product_id"]; ?>
                                        </span>
                                    </p>
                                    <p><?php echo $product["product_description"] ?></p>

                            </div>
                            <div class="col-xs-12 col-md-6">
                                    <hr class="mt-40 hidden-md-up">
                                    <h2 class="mt-50 txt-xs-center">Ratings</h2>
                                    <h3 class="mt-50 h1 txt-gem txt-xs-center"><?php echo $product["rating"] ?> / 5</h3>
                                    <hr class="mt-40 hidden-md-up">
                            </div>
                    </div>
            <hr class="hidden-sm-down mt-50">
    </div>
</div>