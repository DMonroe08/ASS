					<div class="row">
						<nav class="col-md-12">
								<!--Navigation-->
							<ul class="nav nav-tabs nav-justified" role="nav">
								<div class="row">
								<div class="col-md-4"><div class="text-center"><li class="go" role="presentation"><a class="nav-button" href="<?php echo site_url() . '/Welcome/load';?>">Home</a></li></div></div>
								<div class="col-md-4"><div class="text-center"><li class="inactive" role="presentation"><a class="nav-button" href="<?php echo site_url() . '/signin/load';?>">Sign In</a></li></div></div>
								<div class="col-md-4"><div class="text-center"><li class="inactive" role="presentation"><a class="nav-button" href="<?php echo site_url() . '/signup/load';?>">Sign Up</a></li></div></div>
							</div>
							</ul>
						</nav>
					</div>
		
<div class="row">
	<section class="col-md-8 col-md-offset-2">
		<!--Welcome aessage area to hold jQuery plugin message-->
		<p  class="text-center" id="welcomeMess"></p>
	</section>
</div><!--Ends Row Div-->
<div class="row">
	<div class="col-md-8">
<!--Carousel-->
	<div class="carousel slide" data-ride="carousel" id="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel" data-slide-to="1"></li>
	    <li data-target="#carousel" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img class=" img-responsive" src="<?php echo base_url('/assets/images/burger2.jpg');?>"   alt="Responsive image" >
	      <div class="carousel-caption">
	        <p>Juice Bacon Burger with Spinach</p>
	      </div>
	    </div>
	    <div class="item">
	      <img class=" img-responsive" src="<?php echo base_url('/assets/images/chickenM.jpg');?>"   alt="responsive image">
	      <div class="carousel-caption">
	        <p>Chicken Marsala</p>
	      </div>
	    </div>
		
	    <div class="item">
	      <img class=" img-responsive" src="<?php echo base_url('/assets/images/ribs.jpg');?>"   alt="responsive image">
	      <div class="carousel-caption">
	        <p>BBQ Ribs with a side of Steamed Veggetables</p>
	      </div>
	    </div>
	   
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	</div><!--Ends Column MD 6 Div-->
	<section class="col-md-3">
		<!--Buttons of the different courses-->
			<div class="row">
			<ul class="col-md-6 col-md-offset-3" id="course">
			<li><button class="btn btn-default btn-lg" type=""><a href="#">Breakfast</a></button></li>
			<li><button class="btn btn-default btn-lg"><a href="#">Lunch</a></button></li>
			<li><button class="btn btn-default btn-lg"><a href="#">Dinner</a></button></li>
			<li><button class="btn btn-default btn-lg"><a href="#">Dessert</a></button></li>
		</ul>
	</div>
		</section>
		
</div><!--Ends Row Div-->



