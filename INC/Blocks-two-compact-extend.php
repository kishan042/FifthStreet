<?php // Sass file = _blocks-three-and-four.scss 
	  // Blocks-two-compact-extend  
?>
<!-- Mobile module -->
<div class="container mt-20 hidden-md-up">
	<div class="row">
		<div class="col-xs-12 col-md-6 <?php echo $BlockBG?>">
			<div class="txt-block-half">
				<h2 class="txt-xs-center"><?php echo $BlockTitle ?></h2>
				<p class="mt-40 mb-0"><?php echo $BlockText ?></p>
				<a href="<?php echo $BlockLink ?>">
					<button class="mt-2 tertiary-btn-small <?php echo $hideCTA ?> ">
					<?php echo $BlockCTA ?></button>
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 image-block-half px-0">
			<div class="img-half" style="background-image: url(<?php echo $BlockIMG_1 ?>)"></div>
		</div>
	</div>
</div>
<!-- tablet - Desktop module -->
<div class="container-fluid bg-gray-lightest hidden-sm-down">
	<div class="row">
		<div class="col-md-4 col-lg-4 col-xl-3 offset-xl-1 flex-center">
			<div class="container">
				<h2><?php echo $BlockTitle ?></h2>
				<p class="mt-40 mb-0"><?php echo $BlockText ?></p>
				<a href="<?php echo $BlockLink ?>">
					<button class="mt-2 tertiary-btn-small btn-left <?php echo $hideCTA ?> ">
					<?php echo $BlockCTA ?></button>
				</a>
			</div>		
		</div>
		<div class="col-md-8 col-lg-8 col-xl-8">
			<div class="row py-3 flex-center">
			    <div class="product-img col-md-3 col-lg-3" style="background-image: url(<?php echo $BlockIMG_1 ?>)">
			    </div>
			    <div class="product-img col-md-3 col-lg-3" style="background-image: url(<?php echo $BlockIMG_2 ?>)">
			    </div>
			    <div class="product-img col-md-3 col-lg-3" style="background-image: url(<?php echo $BlockIMG_3 ?>)">
			    </div>
			</div>
		</div>
	</div>
</div>