					<div class="row">
						<nav class="col-md-12">
								<!--Navigation-->
							<ul class="nav nav-tabs nav-justified" id="go" role="nav">
								<div class="row">
								<div class="col-md-4"><div class="text-center"><li class="inactive" role="presentation"><a class="nav-button" href="<?php echo site_url() . '/Welcome/load';?>">Home</a></li></div></div>
								<div class="col-md-4"><div class="text-center"><li class="go" role="presentation"><a class="nav-button" href="<?php echo site_url() . '/signin/load';?>">Sign In</a></li></div></div>
								<div class="col-md-4"><div class="text-center"><li class="inactive" role="presentation"><a class="nav-button" href="<?php echo site_url() . '/signup/load';?>">Sign Up</a></li></div></div>
							</div>
							</ul>
						</nav>
					</div>				
<div class="sign">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
	<?php
	if(isset($this->sesion->userdata['logged_in'])){
		header("location: http://localhost/index.php/signin/signin_validation");
	}
	?>
			<h2 class="text-center">Sign In!</h2>
		</div><!--Ends Column MD 6 Offset 3 div-->
		
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<section class="text-center">
				<h4><?php if (isset($message));?></h4>
	<?php
	echo form_open('signin/signin_validation');
	echo "Username: " . form_input('username', '') . "<br><br>";
	echo "Password: " . form_password('password', '', '') . "<br><br>";
	echo "<div class='black'>" . form_submit('submit', 'signin') . "</div>";
	echo form_close();
	?>
	
			</section>
		</div><!--Ends Column MD 6 Offset 3 Div-->
</div><!--Ends Row Div-->
</div><!--Ends Sign Div-->