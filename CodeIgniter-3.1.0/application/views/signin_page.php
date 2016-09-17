<div class="sign">
	
<h1> Recipe Rescue </h1>
	<?php
	if(isset($this->sesion->userdata['logged_in'])){
		header("location: http://localhost/index.php/signin/signin_validation");
	}
	?>
<h2>Sign In!</h2>

<section>
	<?php
	echo form_open('signin/signin_validation');
	echo "Username: " . form_input('username', '');
	echo "Password: " . form_password('password', '', '');
	echo  form_submit('submit', 'Sign In');
	echo form_close();
	?>
	
</section>

</div>