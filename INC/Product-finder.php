<?php
// Sass file = _product-finder.scss 
// Product finder 
?>
<div class="product-finder">
	<div id="section-men" class="column" style="background-image: url(<?php echo $img ."home/product-finder-men.jpg"; ?>);">
		<a class="block-link" href="<?php echo $men ?>">
			<div class="content">
				<div class="box tint-5">
					<h3 class="h3-alt txt-white pr-1">MEN</h3>
					<img src="IMG/icons/arrow-right-white.svg">
										
					<div class="hide sub hidden-md-down">
						<p class="mt-2 column-description txt-white txt-xs-center pr-1">Find everything at your finger tips.</p>
						
						<a href="<?php echo $men ?>">
							<h3 class="mt-2 h4 txt-white pr-1">Featured</h3>
						</a>
						<a href="<?php echo $men . '#collection' ?>">
							<h3 class="mt-2 h4 txt-white pr-1">Collection</h3>
						</a>
						<a href="<?php echo $men . '#footwear' ?>">
							<h3 class="mt-2 h4 txt-white pr-1">Footwear</h3>
						</a>
						<a href="<?php echo $men . '#accessories' ?>">
							<h3 class="mt-2 h4 txt-white pr-1">Accessories</h3>	
						</a>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div id="section-women" class="column" style="background-image: url(<?php echo $img ."home/product-finder-women.jpg"; ?>);">
		<a class="block-link" href="<?php echo $women ?>">
			<div class="content">
				<div class="box tint-5">
					<h3 class="h3-alt txt-white pr-1">WOMEN</h3>
					<img src="IMG/icons/arrow-right-white.svg">
					
					<div class="hide sub hidden-md-down">
						<p class="mt-2 column-description txt-white txt-xs-center pr-1">Grab your necessities in an instant.</p>
						
						<a href="<?php echo $women ?>">
							<h3 class="mt-2 h4 txt-white pr-1">Featured</h3>
						</a>
						<a href="<?php echo $women . '#collection' ?>">
							<h3 class="mt-2 h4 txt-white pr-1">Collection</h3>
						</a>
						<a href="<?php echo $women . '#footwear' ?>">
							<h3 class="mt-2 h4 txt-white pr-1">Footwear</h3>
						</a>
						<a href="<?php echo $women . '#accessories' ?>">
							<h3 class="mt-2 h4 txt-white pr-1">Accessories</h3>	
						</a>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div id="section-brands" class="column" style="background-image: url(<?php echo $img ."home/product-finder-brands.jpg"; ?>);">
		<a class="block-link" href="<?php echo $brands ?>">
			<div class="content">
				<div class="box tint-5">
				<h3 class="h3-alt txt-white pr-1">BRANDS</h3>
					<img src="IMG/icons/arrow-right-white.svg">
					
					<div class="hide sub hidden-md-down">
						<p class="mt-2 column-description txt-white txt-xs-center pr-1">Discover new brands tailored to your needs.</p>
						
						<a href="<?php echo BASE_URL . 'brands/?Branid=19409'?>">
							<h3 class="mt-2 h4 txt-white pr-1">Pure</h3>
						</a>
						<a href="<?php echo BASE_URL . 'brands/?Branid=16376'?>">
							<h3 class="mt-2 h4 txt-white pr-1">Rose</h3>
						</a>
						<a href="<?php echo BASE_URL . 'brands/?Branid=18398'?>">
							<h3 class="mt-2 h4 txt-white pr-1">Aztec</h3>
						</a>
						<a href="<?php echo BASE_URL . 'brands/?Branid=13343'?>">	
							<h3 class="mt-2 h4 txt-white pr-1">Essential</h3>
						</a>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div id="section-offers" class="column" style="background-image: url(<?php echo $img ."home/product-finder-offers.jpg"; ?>);">
		<a class="block-link" href="<?php echo $offers ?>">
			<div class="content">
				<div class="box tint-5">
					<h3 class="h3-alt txt-white pr-1">OFFERS</h3>
					<img src="IMG/icons/arrow-right-white.svg">
					
					<div class="hide sub hidden-md-down">
						<p class="mt-2 column-description txt-white txt-xs-center pr-1">Take your pick anytime.</p>
						
						<a href="<?php echo BASE_URL . 'offers/?Offid=475688'?>">
							<h3 class="mt-2 h4 txt-white pr-1">50% off
							</h3>
						</a>
						<a href="<?php echo BASE_URL . 'offers/?Offid=485699'?>">
							<h3 class="mt-2 h4 txt-white pr-1">25% off</h3>
						</a>
						<a href="<?php echo BASE_URL . 'offers/?Offid=525012'?>">
							<h3 class="mt-2 h4 txt-white pr-1">Clearance</h3>
						</a>
						<a href="<?php echo BASE_URL . 'offers/?Offid=465677'?>">
							<h3 class="mt-2 h4 txt-white pr-1">Student Discount</h3>	
						</a>
					</div>
				</div>
			</div>
		</a>
	</div>
</div>