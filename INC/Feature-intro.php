<!-- Sass file = _feature-intro.scss -->


<!-- Feature-intro -->

<!-- 
<style>


.flex-grid-thirds {
  display: flex;
  justify-content: space-around;
}
.flex-grid-thirds .col {
  width: 100%;
  height: 200px;
}

.col {
  background: #1a1a1a;
  color: #fff;
  padding: 20px;
}


}


	

</style> -->

<!-- <div class="col-xs-6">
<div class="flex-grid-thirds">
  <div class="col">This little piggy went to market.</div>
  <div class="col hide">This little piggy stayed home.</div>
  <div class="col hide">This little piggy.</div>
</div>
</div>
 -->





	<style>



.img-s {
	/*overflow: hidden;*/
	    overflow-x: scroll;
        -webkit-overflow-scrolling:touch; 
        -moz-overflow-scrolling:touch; 

        overflow-y: hidden; 

        padding: 20px
}

.flex-grid-thirds {
  display: flex;
  justify-content: flex-start;

/*width is = amount of image blocks minus 1
This is to allow the next image block to display*/
  width: 300%;
  height: 50vh;

}

::-webkit-scrollbar{
	   display: none; 
} 

/*.flex-grid-thirds .col {
  width: 32%;
}*/


	.col {


	  background: #fff;



	  width: 25%;
	  margin: 0 10px;
	  height: 50vh;


	}

.img-test{
	width: 100%;
	height: 80%;
	background: #1a1a1a;

	padding: 10px;

	display: block;
	margin: 0 auto;
}

h3, h4{
		  /*color: #fff;*/
		  padding-left: 15px;
		margin-bottom: 0px;
}





	</style>

<div class="row mx-0 bg-gray-lightest">
	<div class="img-s">
		<div class="flex-grid-thirds">
		  <div class="col">
			  <div class="img-test"></div>
			  <h3>Product Title</h3>
			  <h4>Brand Title</h4>
		  </div>
		  <div class="col">
	 		  <div class="img-test"></div>
			  <h3>Product Title</h3>
			  <h4>Brand Title</h4>
		  </div>
		  <div class="col">		  
			  <div class="img-test"></div>
			  <h3>Product Title</h3>
			  <h4>Brand Title</h4>
		  </div>
		  <div class="col">		  
			  <div class="img-test"></div>
			  <h3>Product Title</h3>
			  <h4>Brand Title</h4>
		  </div>
		 
		</div>
	</div>
</div>



<!-- 
<style>


.flex-grid-thirds {
  display: flex;
  justify-content: space-around;
}
.flex-grid-thirds, .col {
  width: 100%;
  height: 100%;
}

.col {
  background: #1a1a1a;
  color: #fff;


}


</style> -->

<!-- <div class="row mx-0">
<div class="col-xs-6">
	<div class="flex-grid-thirds">
	  <div class="col">This little piggy went to market.</div>
	  <div class="col">This little piggy stayed home.</div>
	  <div class="col">This little piggy.</div>
	</div>
</div>
	<div class="col-xs-6">
	<div class="flex-grid-thirds">
	  <div class="col">This little piggy went to market.</div>
	  <div class="col">This little piggy stayed home.</div>
	  <div class="col">This little piggy.</div>
	</div>
</div>
</div>

 -->















