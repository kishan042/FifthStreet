<!-- Sass file = _blocks-two.scss -->

<!-- Blocks-two-left-compact -->

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-6 push-md-6 
		<?php echo $BlockBG?> ">
			<div class="txt-block-half">
				<h2 class="txt-gold"><?php echo $BlockTitle ?></h2>
				<p class="mt-40 mb-0"><?php echo $BlockText ?></p>
				<a href="<?php echo $BlockLink ?>">
					<button class="mt-2 tertiary-btn-small <?php echo $hideCTA ?> ">
					<?php echo $BlockCTA ?></button>
				</a>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 pull-md-6 image-block-half px-0">
			<div class="img-half" style="background-image: url(<?php echo $BlockIMG ?>)"></div>
		</div>
	</div>
</div>