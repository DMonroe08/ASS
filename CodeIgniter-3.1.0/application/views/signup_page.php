
<div class="sign">
<div class="row">
	<div class="col-md-6 col-md-offset-3">
<h2>Create an account with us</h2>

<?php echo validation_errors();?>
<section class="errors_here"></section>
</div>
</div><!--Ends Row div-->
<div class="row">
	<div class="col-md-6 col-md-offset-3">
<section class="forms">
	<?php
	echo form_open('signup/check_username');
	echo "Username: " . form_input('username', set_value('username', '')) . "<br>";
	echo "First Name: " . form_input('firstname', set_value('firstname', '')) . "<br>";
	echo "Last Name: " . form_input('lastname', set_value('lastname', '')) . "<br>";
	echo "Email: " . form_input('email', set_value('email', '')) . "<br>";
	echo "Password: " . form_input('password', set_value('username', '')) . "<br>";
	echo form_submit('submit', 'signup');
	echo form_close();
	?>
</section>
	</div><!--Ends Column MD 6 Div-->
</div><!--Ends Row Div-->
</div><!--Ends Sign Div-->