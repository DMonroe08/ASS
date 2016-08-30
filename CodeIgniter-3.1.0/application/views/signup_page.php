<h1> Recipe Rescue </h1>

<h2>Create an account with us</h2>

<section>
	<?php
	echo form_open('signup/');
	echo "Username: " . form_input('username', set_value('username', 'Username'));
	
	echo form_submit('submit', 'signup');
	echo form_close();
	?>
</section>