<style>


/*
.notif-block {
	position: fixed;
	top: 0;
	z-index: 1;
	width: 100%;
	background-color: rgba(0,0,0,0.9);
	box-shadow: 5px 4px 10px rgba(230, 215, 182, 1);
	display: flex;
    align-items: center;
}

.notif-block,
.notif-message { height: 250px; }

.notif-img,
.notif-txt-block,
.notif-cta-block,
.row.notif-message  {
	display: flex;
	align-items: center;
	justify-content: center;
}

.notif-txt-block { 
	flex-direction: column; 
	align-items: flex-start;
}

.notif-cta-block {
	display: flex;
	justify-content: flex-start;
}

.notif-img-block {
	width: 150px;
	height: 150px;
	border-radius: 50%;
	overflow: hidden;
	padding: 15px;
	background-color: #f8f8f8;
}

.notif-cta-block button { border: 1px solid #fff ; }

.notif-cta-block button:hover { 
	border: 1px solid #48d8d8!important;
	color: #fff!important;
}

.notif-cross-icon { 
	position: fixed;
	top: 15px;
	right: 20px;
	z-index: 2;
	width: 35px;
	height: 35px;
 }

.notif-added-to-wishlist { display: none; }

	*/
</style>

<?php 
		// Title
		$BlockTitle = "ADDED TO WISHLIST";
		// Copy
		$BlockText = "This is fill text about the product <br> being added to the wishlist";
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
	<img id="notif-wishlist-exit" class="notif-cross-icon" src="<?php echo $img ?>icons/cross-white.svg">
</div>