<!-- Sass file = _navbar.scss -->

<!-- Mobile Navigation bar -->

	<div class="mob-navigation-bar">
		<div class="primary-options row pt-20 mx-0 pb-2 bg-white">
		<!-- Primary Nav -->
			<div class="col-xs-4 row mx-0 px-0">
				<div class="col-xs-6 icon px-0">
					<img id="menu-icon" class="nav-toggle-btn" src="IMG/icons/hamburger.svg">
					<img id="exit-icon"class="nav-toggle-btn hide" src="IMG/icons/cross.svg">
				</div>
				<div class="col-xs-6 icon px-0">
					<img src="IMG/icons/user.svg">
				</div>
			</div>
			<div class="col-xs-4 icon">
				<img src="IMG/icons/logo.svg" style="width:100%">
			</div>
			<div class="col-xs-4 row mx-0 px-0">
				<div class="col-xs-6 icon px-0">
					<img src="IMG/icons/search.svg">
				</div>
				<div class="col-xs-6 icon px-0">
					<img src="IMG/icons/basket.svg">
				</div>
			</div>
		</div>
		<div class="mob-secondary-nav bg-gray-lightest">
		<!-- Secondary Nav -->
			<ul class="secondary-options row mx-0">
				<li class="col-xs-4 text-xs-center p-medium 
				<?php echo $Trending ?> ">TRENDING</li>
				<li class="col-xs-4 text-xs-center p-medium 
				<?php echo $Offers?> ">OFFERS</li>
				<li class="col-xs-4 text-xs-center p-medium
				<?php echo $Wardrobe ?> ">WARDROBE</li>
			</ul>
		</div>
	</div>

	<nav id="h-menu" class="bg-gray-light">
	<!-- Hamburger menu to be hidden -->  
		<ul class="mt-100">
			<li class="pl-1"><a href="#">MEN</a></li>
			<li class="pl-1"><a href="#">WOMEN</a></li>
			<li class="pl-1"><a href="#">BRANDS</a></li>
			<li class="pl-1"><a href="#">TRENDING</a></li>
			<li class="pl-1"><a href="#">OFFERS</a></li>
			<li class="pl-1"><a href="#">WARDROBE</a></li>
			<li class="pl-1"><a href="#">ABOUT US</a></li>
		</ul>
	</nav>

<!-- Desktop Navigation bar -->

	<div class="desk-navigation-bar">
		<div class="container-compact px-0">
		<!-- Primary Nav -->
			<div class="desk-primary-nav row mx-0 pt-10">
				<div class="desk-main-options col-xs-4 pt-10 pl-0">
					<ul>
						<li><a href="#">MEN</a></li>
						<li><a href="#">WOMEN</a></li>
						<li><a href="#">BRANDS</a></li>
						<li class=""><a href="#">ABOUT US</a></li>
					</ul>
				</div>
				<div class="col-xs-4">
					<ul>
						<li class="desk-logo"><img src="IMG/icons/logo.svg" style="width:120px"></li>
					</ul>
				</div>
				<div class="desk-additional-options col-xs-4">
					<ul class="text-xs-right pt-10">
						<li><img src="IMG/icons/search.svg"></li>
						<li><img src="IMG/icons/user.svg"></li>
						<li><img src="IMG/icons/basket.svg"></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="desk-secondary-nav">
		<!-- Secondary Nav -->
			<ul class="mb-0">
				<li class="text-xs-center p-medium 
				<?php echo $Trending ?> ">TRENDING</li>
				<li class="text-xs-center p-medium
				<?php echo $Offers?> ">OFFERS</li>
				<li class="text-xs-center p-medium
				<?php echo $Wardrobe ?> ">WARDROBE</li>
			</ul>
		</div>
	</div>