<?php
// Variables - Start

// Title tag
$Title = "Style guide ";
// Meta description
$Description = "Fifth Street style guide";

// Image source
$img = "IMG/";
// Variables - End
// include files 
include 'INC/Header.php'; 
?>
<style type="text/css">

	.compact { width:60%; }

	.wrapper{	
		margin: 0 auto;
		text-align: center;	}
	.block{ 
		display: inline-block; 
		margin: 20px 20px; }
	.circle{
		width: 100px;
		height: 100px;
		border-radius: 50%; }
	.bg-white{	border: 1px solid black; }
	
	.spacing-block{ width: 100%;
	height: 50px; }
</style>


<h1 class="text-xs-center my-3 py-2">FIFTH STREET - style guide</h1>


<hr>
<!-- Section 1 -->
<h2 class="my-2 ml-2 mb-3 pb-2 h2"><i>Heading Styles</i></h2>


<div class="container-fluid">
<div class="row">

	<div class="col-4">
	<h1 class="px-3 py-2 h1">H1 - Heading</h1>
	<h2 class="px-3 py-2 h2">H2 - Heading</h2>
	<h2 class="px-3 py-2 h2-alt">H2 - Alternative Heading</h2>
	<h3 class="px-3 py-2 h3">H3 - Heading</h3>
	<h3 class="px-3 py-2 h3-alt">H3 - Alternative Heading</h3>
	<h4 class="px-3 py-2 h4">H4 - Heading</h4>
	</div>

	<div class="col-4">
	<h1 class="px-3 py-2 txt-gold h1">H1 - Heading</h1>
	<h2 class="px-3 py-2 txt-gold h2">H2 - Heading</h2>
	<h2 class="px-3 py-2 txt-gold h2-alt">H2 - Alternative Heading</h2>
	<h3 class="px-3 py-2 txt-gold h3">H3 - Heading</h3>
	<h3 class="px-3 py-2 txt-gold h3-alt">H3 - Alternative Heading</h3>
	<h4 class="px-3 py-2 txt-gold h4">H4 - Heading</h4>
	</div>

	<div class="col-4 bg-gray-dark">
	<h1 class="px-3 py-2 txt-white h1">H1 - Heading</h1>
	<h2 class="px-3 py-2 txt-white h2">H2 - Heading</h2>
	<h2 class="px-3 py-2 txt-white h2-alt">H2 - Alternative Heading</h2>
	<h3 class="px-3 py-2 txt-white h3">H3 - Heading</h3>
	<h3 class="px-3 py-2 txt-white h3-alt">H3 - Alternative Heading</h3>
	<h4 class="px-3 py-2 txt-white h4">H4 - Heading</h4>
	</div>
</div>
</div>

<hr>
<!-- Section 2 -->
<h2 class="my-2 ml-2 mb-3 pb-2 h2"><i>Paragraph Styles</i></h2>


<div class="container compact">
	<p class="p-medium"><b>Medium paragraph style - </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<p class="p-small"><b>small paragraph style - </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<p class="p-light"><b>light paragraph style - </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>


<hr>
<!-- Section 3 -->
<h2 class="my-2 ml-2 mb-3 pb-2 h2"><i>Colours</i></h2>



<div class="wrapper">
	<div class="block">
		<div class=" circle bg-white"></div>
		<p class="p-light">White</p>
		<p class="p-light">#FFF</p>
	</div>
	<div class="block">
		<div class=" circle bg-black"></div>
		<p class="p-light">Black</p>
		<p class="p-light">#000</p>
	</div>
	<div class="block">
		<div class=" circle bg-gem"></div>
		<p class="p-light">Gem</p>
		<p class="p-light">#48D8D8</p>
	</div>	
		<div class="block">
		<div class=" circle bg-ruby"></div>
		<p class="p-light">Ruby</p>
		<p class="p-light"> #FF0048</p>
	</div>	
		<div class="block">
		<div class=" circle bg-gold"></div>
		<p class="p-light">Gold</p>
		<p class="p-light">#C6B89B</p>
	</div>	
</div>

<div class="wrapper">
<div class="block">
		<div class=" circle bg-gray-lightest"></div>
		<p class="p-light">Gray-lightest</p>
		<p class="p-light">#F5F6F6</p>
	</div>	
		<div class="block">
		<div class=" circle bg-gray-light"></div>
		<p class="p-light">Gray-light</p>
		<p class="p-light">#EBECEC</p>
	</div>	
		<div class="block">
		<div class=" circle bg-gray"></div>
		<p class="p-light">Gray</p>
		<p class="p-light">#D9DBDC</p>
	</div>	
		<div class="block">
		<div class=" circle bg-gray-dark"></div>
		<p class="p-light">Gray-dark</p>
		<p class="p-light">#313131</p>
	</div>	
		<div class="block">
		<div class=" circle bg-gray-darkest"></div>
		<p class="p-light">Gray-darkest</p>
		<p class="p-light">#1A1A1A</p>
	</div>	
</div>


<hr>
<!-- Section 4 -->
<h2 class="my-2 ml-2 mb-3 pb-2 h2"><i>Spacing</i></h2>

<div class="container compact">
	<div class="spacing-block bg-gray-dark mt-10">
		<p class="text-xs-center txt-white">mt-10 = margin top 10px </p>
	</div>
	<div class="spacing-block bg-gray-dark mt-50">
		<p class="text-xs-center txt-white">mt-50 = margin top 50px </p>
	</div>
	<div class="spacing-block bg-gray-dark mt-100">
		<p class="text-xs-center txt-white">mt-100 = margin top 100px </p>
	</div>
</div>


<hr>
<!-- Section 5 -->
<h2 class="my-2 ml-2 mb-3 pb-2 h2"><i>CTA's</i></h2>

<button class="mt-2 primary-btn-medium">
	Test
</button>
<button class="mt-2 primary-btn-small">
	Test
</button>
<button class="mt-2 secondary-btn-medium">
	Test
</button>
<button class="mt-2 secondary-btn-small">
	Test
</button>
<button class="mt-2 tertiary-btn-medium">
	Test
</button>
<button class="mt-2 tertiary-btn-small">
	Test
</button>
				


<hr>
<!-- Section 6 -->
<h2 class="my-2 ml-2 mb-3 pb-2 h2"><i>Test</i></h2>











