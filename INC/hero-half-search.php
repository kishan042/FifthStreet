<!-- Sass file = _hero.scss -->

<!-- Hero-half-search -->

<?php
// This module checks if a search has been performed.
// Based on this, the results will be displayed.
// If not match can be made in the database then a message to notify the
// user, will be displayed through the else statement
?>

<?php
    // If a non-blank search term is specified in
    // the query string, perform a search
    $search_term = "";
    if (isset($_GET["s"])) {
        $search_term = trim($_GET["s"]);
        if ($search_term != "") {
            require_once(ROOT_PATH . "INC/DB/model.php");
            $products = get_products_search($search_term);
        } 
    }
?>


<!-- Mobile layout -->
<div class="mob-search hero-half-search" onload="load()">
	<div class="hero-content">
		<form method="get" action="./">
			<div class="row hero-content">
				<div class="mob-search-bar-width col-xs-12">
					<div class="input-group">
						<span class="input-group-btn">
						 <a id="mob-search-cross-url" href="">
							<div id="mob-search-cross-icon" class="btn btn-secondary">
							</div>	
						</a>
						</span>
						<input type="text" id="mob-search-bar" class="form-control" name="s" value="<?php echo htmlspecialchars($search_term); ?>" autofocus placeholder="SEARCH... "/>
						<span class="input-group-btn">
							<button id="mob-search-icon" class="btn btn-secondary">
							</button>	
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
		<!-- <h1 class="h1 txt-white letter-space-large txt-shadow"><?php //echo $h1 ?></h1> --> 
		<form method="get" action="./">
			<div class="row hero-content">
				<div class="col-md-7 col-lg-5">
					<div class="input-group">
						<input type="text" id="search-bar" class="form-control" name="s" value="<?php echo htmlspecialchars($search_term); ?>" autofocus placeholder="SEARCH TO FIND | SAVE | BUY "/>
						<span class="input-group-btn">
							<button id="search-icon" class="btn btn-secondary" type="submit" value="">		
						</span>
					</div>
				</div>
			</div>
		</form> 
	</div>
</div>

<script>
	function goBack() {
    window.history.back();
}
</script>