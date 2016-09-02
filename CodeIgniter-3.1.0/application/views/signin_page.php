<h1> Recipe Rescue </h1>

<h2>Sign In!</h2>

<section>
	<?php
	echo form_open('signin/signin_validation');
	echo "Username: " . form_input('username', '');
	echo "Password: " . form_input('password', '', 'class="password"');
	echo  form_submit('submit', 'Sign In');
	echo form_close();
	?>
	
</section>