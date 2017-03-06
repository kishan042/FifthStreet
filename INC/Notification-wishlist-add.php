<?php 
		// Title
		$BlockTitle = "ADDED TO WISHLIST";
		// Copy
		$BlockText = $product["name"] . "<br> has been added to your wishlist!";
?>
<div class="container-fluid notif-block notif-added-to-wishlist">
	<div class="container notif-message">
		<div class="row notif-message">
			<div class="col-md-4 col-lg-4 col-xl-3 notif-txt-block">
				<h2 class="h3 txt-gold-light"><?php echo $BlockTitle ?></h2>
				<p class="mt-10 mb-0 txt-white"><?php echo $BlockText ?></p>
			</div>
			<div class="col-md-4 col-lg-3 col-xl-3 notif-img ">
				 <div class="notif-img-block">
					 <img id="<?php echo $product["sku"] ?>" 
	                      class="img-fluid item_image" 
	                      src="<?php echo BASE_URL . $product["img"] ?>" 
	                      alt="<?php echo $product["name"] ?>">
                 </div>
			</div>
			<div class="col-md-4 col-lg-3 col-xl-3 notif-cta-block">
				<a class="tertiary-btn-flex-center" href="<?php echo $wardrobe ?>">
					<button class="h4 tertiary-btn-small btn-brand-cta txt-gold-light">View wardrobe</button>
				</a>
			</div>
		</div>
	</div>
	<img class="notif-wishlist-exit notif-cross-icon" src="<?php echo $img ?>icons/cross-white.svg">
</div>