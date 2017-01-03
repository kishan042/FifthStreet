<!-- Sass file = _blocks-two.scss -->

<!-- Blocks-two-left -->

<div class="row mx-0">
	<div class="col-xs-12 col-md-6 push-md-6
	<?php echo $BlockBG?>">
		<div class="txt-block-full">
			<h2 class="txt-gold"><?php echo $BlockTitle ?></h2>
			<p class="mt-40 mb-0"><?php echo $BlockText ?></p>
			<a href="<?php echo $BlockLink ?>">
				<button class="mt-2 tertiary-btn-small <?php echo $hideCTA ?> ">
				<?php echo $BlockCTA ?></button>
			</a>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 pull-md-6 image-block-full px-0">
		<div class="img-full" style="background-image: url(
		<?php echo $BlockIMG ?>)"></div>
	</div>
</div>