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