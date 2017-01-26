<!-- Sass file = _navbar.scss -->

<!-- Mobile Navigation bar -->

	<div class="mob-navigation-bar">
		<div class="primary-options row pt-20 mx-0 pb-2 bg-white">
		<!-- Primary Nav -->
			<div class="col-xs-4 row mx-0 px-0">
				<div class="col-xs-6 icon px-0">
					<img id="menu-icon" class="nav-toggle-btn" src="<?php echo $img ?>icons/hamburger.svg">
					<img id="exit-icon"class="nav-toggle-btn hide" src="<?php echo $img ?>icons/cross.svg">
				</div>
				<div class="col-xs-6 icon px-0">
					<a href="<?php echo $profile ?>">
						<img src="<?php echo $img ?>icons/user.svg">
					</a>
				</div>
			</div>
			<div class="col-xs-4 icon">
				<a href="<?php echo $home ?>">
					<img src="<?php echo $img ?>icons/logo.svg" style="width:100%">
				</a>
			</div>
			<div class="col-xs-4 row mx-0 px-0">
				<div class="col-xs-6 icon px-0">
					<a href="<?php echo $search ?>">
						<img src="<?php echo $img ?>icons/search.svg">
					</a>
				</div>
				<div class="col-xs-6 icon px-0">
					<a href="<?php echo $basket ?>">
						<img src="<?php echo $img ?>icons/basket.svg">
					</a>
				</div>
			</div>
		</div>
		<div class="mob-secondary-nav bg-gray-lightest">
		<!-- Secondary Nav -->
			<ul class="secondary-options row mx-0">
				<li class="col-xs-4 txt-xs-center p-medium
				<?php echo $ActiveTrending ?>">
					<a href="<?php echo $trending ?>">
						TRENDING
					</a>
				</li>
				<li class="col-xs-4 txt-xs-center p-medium
				<?php echo $ActiveOffers ?>">
					<a href="<?php echo $offers ?>">
						OFFERS
					</a>
				</li>
				<li class="col-xs-4 txt-xs-center p-medium
				<?php echo $ActiveWardrobe ?>">
					<a href="<?php echo $wardrobe ?>">
						WARDROBE
					</a>
				 </li>
			</ul>
		</div>
	</div>
	<nav id="h-menu" class="bg-gray-light">
	<!-- Hamburger menu to be hidden -->  
		<ul class="mt-100">
			<a href="<?php echo $men ?>"><li class="pl-1">MEN</li></a>
			<a href="<?php echo $women ?>"><li class="pl-1">WOMEN</li></a>
			<a href="<?php echo $brands ?>"><li class="pl-1">BRANDS</li></a>
			<a href="<?php echo $trending ?>"><li class="pl-1">TRENDING</li></a>
			<a href="<?php echo $offers ?>"><li class="pl-1">OFFERS</li></a>
			<a href="<?php echo $wardrobe ?>"><li class="pl-1">WARDROBE</li></a>
			<a href="<?php echo $about ?>"><li class="pl-1">ABOUT US</li></a>
		</ul>
	</nav>

<!-- Desktop Navigation bar -->

	<div class="desk-navigation-bar">
		<div class="container-compact px-0">
		<!-- Primary Nav -->
			<div class="desk-primary-nav row mx-0 pt-10">
				<div class="desk-main-options col-xs-4 pt-10 pl-0">
					<ul>
						<li><a href="<?php echo $men ?>">MEN</a></li>
						<li><a href="<?php echo $women ?>">WOMEN</a></li>
						<li><a href="<?php echo $brands ?>">BRANDS</a></li>
						<li><a href="<?php echo $about ?>">ABOUT US</a></li>
					</ul>
				</div>
				<div class="col-xs-4">
					<ul>
						<li class="desk-logo">
							<a href="<?php echo $home ?>">
								<img src="<?php echo $img ?>icons/logo.svg" style="width:120px">
							</a>
						</li>
					</ul>
				</div>
				<div class="desk-additional-options col-xs-4">
					<ul class="txt-xs-right pt-10">
						<li>
							<a href="<?php echo $search ?>">
								<img src="<?php echo $img ?>icons/search.svg">
							</a>	
						</li>
						<li>
							<a href="<?php echo $profile ?>">
								<img src="<?php echo $img ?>icons/user.svg">
							</a>	
						</li>
						<li>
							<a href="<?php echo $basket ?>">
								<img src="<?php echo $img ?>icons/basket.svg">
							</a>	
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="desk-secondary-nav">
		<!-- Secondary Nav -->
			<ul class="mb-0">
				<li class="txt-xs-center p-medium
				<?php echo $ActiveTrending ?>">
					<a href="<?php echo $trending ?>">
						TRENDING
					</a>
				</li>
				<li class="txt-xs-center p-medium 
				<?php echo $ActiveOffers?>">
					<a href="<?php echo $offers ?>">
						OFFERS
					</a>
				</li>
				<li class="txt-xs-center p-medium 
				<?php echo $ActiveWardrobe ?>">
					<a href="<?php echo $wardrobe ?>">
						WARDROBE
					</a>
				</li>
			</ul>
		</div>
	</div>