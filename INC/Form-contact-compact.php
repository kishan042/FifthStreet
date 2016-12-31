<!-- Sass file = _form.scss -->

<!-- Contact form compact -->

<article class="container-small">

	<h2 class="text-xs-center">Contact Form</h2>
	<p class="text-xs-center">Feel free to contact Fifth Street for any assistance.</p>	
</article>

<div class="mt-50"> <!--Spacing --> </div>


<div class="container-small">
	<div class="row">
	<form action="">
	<div class="row mx-0">
		<div class="col-xs-12 col-sm-6 form-group">
			<input type="text" name="name" id="inputName" placeholder="FULL NAME" required>
		</div>
		<div class="col-xs-12 col-sm-6 form-group">
			<input type="email" name="email" id="inputEmail" placeholder="EMAIL ADDRESS" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
		</div>
	</div>
		<div class="col-xs-12 form-group mt-40">
			<textarea name="message" rows="8" placeholder="MESSAGE" required></textarea>
		</div>
		<div class="col-xs-12 mt-40">
			<button type="submit" class="secondary-btn-small">SEND</button>
		</div>
		</form>
	</div>
</div>