<?php
// Config file
		include_once 'INC/DB/Config.php';

// Header
		// Title tag
		$Title = "Email template ";
		// Meta description
		$Description = "Email template";
		
		// Image source
		$img = BASE_URL . "IMG/";

		include (ROOT_PATH . 'INC/Header.php');

		$first_name = "test";
?>
<body style="background-color:#f5f6f6">
	<div style="width:50%;display: block;
    margin: 0 auto;background-color: white;padding:20px;">
	<?php
		// Hero-half
		//IMG URL
		$url = $img . "lifestyle/email.jpg"; 
		$url = "https://images.unsplash.com/photo-1495837174058-628aafc7d610?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=&bg="; 
		// Amount of tint on image
		$tint = "tint-1";
		// copy for H1
		$h1 = "FIFTH STREET";

		include (ROOT_PATH . 'INC/Hero-half.php');
	?>
	  <br><br>
	   <div style="background-image:url(http://thefifthstreet.com/IMG/lifestyle/email.jpg);height:40vmin;background-size: cover;background-position: center;"></div>
	  <h2 class="h3-alt">Hi Kishan,</h2>
	  <p>Thank you for shopping with us today.</p>
	  <p> Click on the link below to collect your E-receipt in the form of products. Remember you can also return and exchange any of the products purchased from the link below as well, just click on the product item.
	  </p>
	  <br>
	  <a href="http://thefifthstreet.com/wardrobe/receipts.php' . $limit . $user_link . '">
		  <button class="tertiary-btn-small">Collect E-receipt</button>
	  </a>
	  <br><br>
	  <p>As a reward for being a great customer, click on the link below to claim your free souvenir.
	  </p>
	  <br>
	  <a href="http://thefifthstreet.com/wardrobe/souvenirs.php?sou=1438">
		  	<button class="tertiary-btn-small">Claim Souvenir</button>
	  </a>
	  <br>
	  <p>Have a great day,<br>The Fifth Street Team.</p>	
	</div>
</div>


</body>