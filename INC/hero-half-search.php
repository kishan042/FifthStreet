<!-- Sass file = _hero.scss -->

<!-- Hero-half-search -->

<!-- Mobile layout -->
<div class="mob-search hero-half-search">
	<div class="hero-content">
		<form method="get" action="./">
			<div class="row hero-content">
				<div class="mob-search-bar-width col-xs-12">
					<div class="input-group">
						<input type="text" id="mob-search-bar" class="form-control" name="s" value="<?php echo htmlspecialchars($search_term); ?>" autofocus>
						<span class="input-group-btn">
							<button id="mob-search-icon" class="btn btn-secondary" type="submit" value="">		
						</span>
					</div>
				</div>
			</div>
		</form> 
	</div>
</div>

<!-- Desktop -->
<div class="desk-search hero-half-search" style="background-image: url(
<?php echo $url ?>);">
	<div class="hero-content <?php echo $tint ?>">
		<h1 class="h1 txt-white letter-space-large"><?php echo $h1 ?></h1> 
		<form method="get" action="./">
			<div class="row hero-content">
				<div class="col-md-7 col-lg-5">
					<div class="input-group">
						<input type="text" id="search-bar" class="form-control" name="s" value="<?php echo htmlspecialchars($search_term); ?>" autofocus>
						<span class="input-group-btn">
							<button id="search-icon" class="btn btn-secondary" type="submit" value="">		
						</span>
					</div>
				</div>
			</div>
		</form> 
	</div>
</div>