<?php
// Header
		// Title tag
		$Title = "About Fifth Street ";
		// Meta description
		$Description = "Fill text";

		// CSS path
		$CSSPath = "CSS/Styles.css";
		// Image source
		$img = "IMG/";

		include 'INC/Header.php';


// Nav
		include 'INC/Navbar.php'; 


// Hero-half
	//IMG URL
	$url = "https://unsplash.imgix.net/photo-1414490929659-9a12b7e31907"; 
	// Amount of tint on image
	$tint = "tint-5";
	// copy for H1
	$h1 = "Fifth Street";

	include 'INC/Hero-half.php'; 
?> 

	<div class="mt-50"> <!--Spacing --> </div>

	<article class="container-small">
		<h2>Our Story</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias facere, asperiores provident earum perferendis. Temporibus natus magnam laborum nisi sed adipisci, commodi provident, rerum aspernatur molestias aperiam. Adipisci quas distinctio quidem voluptate iure earum, voluptatibus ex consequuntur sed odio magni molestiae, at a mollitia, saepe fugit molestias!</p>
	</article>

	<div class="mt-50"> <!--Spacing </div> -->

<?php 
	
// Hero-compact
	//IMG URL
	$url = "https://unsplash.imgix.net/photo-1414490929659-9a12b7e31907"; 
	
	include 'INC/Hero-compact.php'; 
?> 

	<div class="mt-50"> <!--Spacing --> </div>

	<article class="container-small">
		<h2>Our Aim</h2>
		<p>Ipsam, ea sed eos vero aut accusantium officia repudiandae obcaecati, optio explicabo ducimus non, distinctio hic quo voluptate laudantium odit placeat vitae suscipit facere vel et itaque, quaerat. Provident explicabo consectetur repellat debitis, amet fugit corporis maxime, deleniti nisi, ratione recusandae veritatis? Dicta qui eos, non voluptatem alias ea aspernatur assumenda asperiores, repellendus, fuga hic nesciunt.</p>	
	</article>

	<div class="mt-50"> <!--Spacing --> </div>

	<article class="container-small">
		<h2>Contact Form</h2>
	</article>

	<div class="mt-50"> <!--Spacing --> </div>

<!--  	<div class="container">
		<div class="row">
			<form method="post" action="../form.php">
			  <div class="form-group">
			    <div class="col-xs-12 col-sm-6">
			      <input type="text" name="name" class="form-control border-bottom" id="inputName" placeholder="Full Name" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-xs-12 col-sm-6">
			      <input type="email" name="email" class="form-control border-bottom" id="inputEmail" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
			    </div>
			  </div>
			  <div class="form-group">
			  	<div class="col-xs-12 btn-space">
			  		<textarea class="form-control textarea" name="message" rows="3" placeholder="Message" required></textarea>
			  	</div>
			  </div>
			  <div class="form-group">
			    <div class="">
			      <button type="submit" class="btn btn-default center-block">Send</button>
			    </div>
			  </div>
			</form>
		</div>
	</div> -->
<style>
	form{ width: 100%; }
	#submit{     
	background-color: #fff;
	border: 2px solid #48D8D8;
    border-radius: 50px;
    padding: 5px 30px;
    display: block;
    margin: 0 auto; }

    .form-group input,
    .form-group textarea{     
	background-color: #fff;

	border-bottom: 1px solid #1a1a1a;
	width: 100%;
    border-radius: 5px;
    padding: 5px 30px;
   /* display: block;
    margin: 0 auto; */}

</style>
	<div class="container-small">
		<div class="row">
		<form action="">
		<div class="row mx-0">
			<div class="col-xs-12 form-group col-sm-6">
				<input type="text" name="name" id="inputName" placeholder="Full Name" required>
			</div>
			<div class="col-xs-12 form-group col-sm-6">
				<input type="email" name="email" id="inputEmail" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
			</div>
		</div>
			<div class="col-xs-12 form-group">
				<textarea name="message" rows="5" placeholder="Message" required></textarea>
			</div>
			<div class="col-xs-12">
				<button type="submit" id="submit" class="btn btn-default">Send</button>
			</div>
			</form>
		</div>
	</div>

	<div class="mt-50"> <!--Spacing --> </div>

<?php 

// Footer
		// page tag
		$page = "About";

		include 'INC/Footer.php'; 

?> 







