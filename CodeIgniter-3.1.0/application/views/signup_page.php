<h1> Recipe Rescue </h1>

<h2>Create an account with us</h2>

<?php echo validation_errors();?>
<section class="errors_here"></section>

<section class="forms">
	<?php
	echo form_open('signup/create_user');
	echo "Username: " . form_input('username', set_value('username', ''));
	echo "Password: " . form_input('password', set_value('username', ''));
	
	echo form_submit('submit', 'signup');
	echo form_close();
	?>
</section>