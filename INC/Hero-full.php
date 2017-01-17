<!-- Sass file = _hero.scss -->

<!-- Hero-full -->

<div class="hero-full" style="background-image: url(
<?php echo $HeroUrl ?> );">
	<div class="tint <?php echo $tint ?>">
		<h1 class="h1 txt-white letter-space-large"><?php echo $h1 ?></h1> 
   	    <h2 class="h3 txt-white hidden-xs-down mt-1"><?php echo $description ?></h2>
   	    <a href="<?php echo $ButtonUrl ?>">
	   	    <button class="mt-2 primary-btn-medium">
		   	    <?php echo $ButtonCopy ?>
		   	</button>
	   	</a>
   	    <img src="IMG/icons/arrow-down-white.svg" style="width:60px;">
	</div>
</div>