<!-- Sass file = _blocks-three-and-four.scss -->

<!-- Blocks-grid -->
<?php 
// Mobile module
?>
<div class="container-fluid hidden-md-up">
	<h2 class="txt-xs-center pt-40"><?php echo $Block_Grid_Title ?></h2>
	<div class="container overflow-hidden">
		<div class="row flex-no-wrap-4 pt-3">
			<div class="col-xs-3 flex-col-4-center">
			    <a href="<?php echo $Block_Grid_1_Link ?>">
					<div class="product-img-2" style="background-image: url(<?php echo $Block_Grid_IMG_1  ?>)">
					</div>
					<h2 class="h3-alt"><?php echo $product_Title_1; ?></h2>
					<p><?php echo $product_description_1 ?></p>
			    </a>
			</div>
			<div class="col-xs-3 flex-col-4-center">
			    <a href="<?php echo $Block_Grid_2_Link ?>">
					<div class="product-img-2" style="background-image: url(<?php echo $Block_Grid_IMG_2 ?>)">
					</div>
					<h2 class="h3-alt"><?php echo $product_Title_2; ?></h2>
					<p><?php echo $product_description_2 ?></p>
			    </a>
			</div>
			<div class="col-xs-3 flex-col-4-center">
			    <a href="<?php echo $Block_Grid_4_Link ?>">
					<div class="product-img-2" style="background-image: url(<?php echo $Block_Grid_IMG_4 ?>)">
					</div>
					<h2 class="h3-alt"><?php echo $product_Title_4; ?></h2>
					<p><?php echo $product_description_4 ?></p>
			    </a>
			</div>
			<div class="col-xs-3 flex-col-4-center">
			    <a href="<?php echo $Block_Grid_5_Link ?>">
					<div class="product-img-2" style="background-image: url(<?php echo $Block_Grid_IMG_5 ?>)">
					</div>
					<h2 class="h3-alt"><?php echo $product_Title_5; ?></h2>
					<p><?php echo $product_description_5?></p>
			    </a>
			</div>
			<div class="col-xs-3 flex-col-4-center">
			    <a href="<?php echo $Block_Grid_6_Link ?>">
					<div class="product-img-2" style="background-image: url(<?php echo $Block_Grid_IMG_6 ?>)">
					</div>
					<h2 class="h3-alt"><?php echo $product_Title_6; ?></h2>
					<p><?php echo $product_description_6 ?></p>
			    </a>
			</div>
			<div class="col-xs-3 flex-col-4-center">
			    <a href="<?php echo $Block_Grid_7_Link ?>">
					<div class="product-img-2" style="background-image: url(<?php echo $Block_Grid_IMG_7 ?>)">
					</div>
					<h2 class="h3-alt"><?php echo $product_Title_7; ?></h2>
					<p><?php echo $product_description_7 ?></p>
			    </a>
			</div>
			<div class="col-xs-3 flex-col-4-center">
			    <a href="<?php echo $Block_Grid_8_Link ?>">
					<div class="product-img-2" style="background-image: url(<?php echo $Block_Grid_IMG_8 ?>)">
					</div>
					<h2 class="h3-alt"><?php echo $product_Title_8; ?></h2>
					<p><?php echo $product_description_8 ?></p>
			    </a>
			</div>
			<div class="col-xs-3 flex-col-4-center">
			    <a href="<?php echo $Block_Grid_9_Link ?>">
					<div class="product-img-2" style="background-image: url(<?php echo $Block_Grid_IMG_9 ?>)">
					</div>
					<h2 class="h3-alt"><?php echo $product_Title_9; ?></h2>
					<p><?php echo $product_description_9?></p>
			    </a>
			</div>
		</div>
	</div>
</div>
<?php 
// Desktop module
?>
<div id="<?php echo $Block_Grid_ID ?>" class="hidden-sm-down">
	<div class="container-fluid">
		<h2 class="txt-xs-center"><?php echo $Block_Grid_Title ?></h2>
		<div class="container px-0 mt-50">
			<div class="row">
				<div class="col-md-3">
					<div class="col-md-12 px-0">
					   <a href="<?php echo $Block_Grid_1_Link ?>">
							<div class="grid-img" style="background-image: url(<?php echo $Block_Grid_IMG_1 ?>)">
							</div>
					    </a>
					</div>
					<div class="col-md-12 px-0 pt-1">
					   <a href="<?php echo $Block_Grid_2_Link ?>">
							<div class="grid-img" style="background-image: url(<?php echo $Block_Grid_IMG_2 ?>)">
							</div>
					    </a>
					</div>
				</div>
				<div class="col-md-6 px-0">
					<div class="col-md-12 px-0">
							<div class="grid-img grid-center-img" style="background-image: url(<?php echo $Block_Grid_IMG_3 ?>)">
							</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="col-md-12 px-0">
					   <a href="<?php echo $Block_Grid_4_Link ?>">
							<div class="grid-img" style="background-image: url(<?php echo $Block_Grid_IMG_4 ?>)">
							</div>
					    </a>
					</div>
					<div class="col-md-12 px-0 pt-1">
					   <a href="<?php echo $Block_Grid_5_Link ?>">
							<div class="grid-img" style="background-image: url(<?php echo $Block_Grid_IMG_5 ?>)">
							</div>
					    </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container px-0 pt-1">
		<div class="row flex-grid-space">
			<div class="col-md-3 px-">
			   <a href="<?php echo $Block_Grid_6_Link ?>">
					<div class="grid-img" style="background-image: url(<?php echo $Block_Grid_IMG_6 ?>)">
					</div>
			    </a>
			</div>
			<div class="col-md-3 pl-0 pr-0">
			   <a href="<?php echo $Block_Grid_7_Link ?>">
					<div class="grid-img" style="background-image: url(<?php echo $Block_Grid_IMG_7 ?>)">
					</div>
			    </a>
			</div>
			<div class="col-md-3 pr-0">
			   <a href="<?php echo $Block_Grid_8_Link ?>">
					<div class="grid-img" style="background-image: url(<?php echo $Block_Grid_IMG_8 ?>)">
					</div>
			    </a>
			</div>
			<div class="col-md-3 px-">
			   <a href="<?php echo $Block_Grid_9_Link ?>">
					<div class="grid-img" style="background-image: url(<?php echo $Block_Grid_IMG_9 ?>)">
					</div>
			    </a>
			</div>
		</div>
	</div>
</div>
