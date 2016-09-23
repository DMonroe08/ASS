					<div class="row">
						<nav class="col-md-12">
								<!--Navigation-->
							<ul class="nav nav-tabs nav-justified" id="go" role="nav">
								<div class="row">
								<div class="col-md-4"><div class="text-center"><li class="inactive" role="presentation"><a class="nav-button" href="<?php echo site_url() . '/Welcome/load';?>">Home</a></li></div></div>
								<div class="col-md-4"><div class="text-center"><li class="inactive" role="presentation"><a class="nav-button" href="<?php echo site_url() . '/signin/load';?>">Sign In</a></li></div></div>
								<div class="col-md-4"><div class="text-center"><li class="go" role="presentation"><a class="nav-button" href="<?php echo site_url() . '/signup/load';?>">Sign Up</a></li></div></div>
							</div>
							</ul>
						</nav>
					</div>
					
					
					<div class="sign">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
					<h2 class="text-center">Users Area</h2>

					<?php echo validation_errors();?>
					<section class="errors_here"></section>
					</div>
					</div><!--Ends Row div-->
<div class="row">
	<div class="col-md-6 col-md-offset-3">
<section class="text-center">
	<div class="forms">
			<h3>Welcome! <?php if (isset($username));?></h3>
			<p>Change Password</p>
			<?php if (isset($message));?>
			<?php
				echo form_open('signin/update');
				echo "Old Password: " . form_input('password') . "<br><br>";
				echo "New Password: " . form_input('new_pw') . "<br><br>";
				echo "Confirm Password: " . form_input('new_pw2') . "<br><br>";
				echo form_submit('submit', 'Update');
				echo form_close();
			?>
		</section>
		</div>
	</div>
		<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<section class="text-center">
			<div class="forms">
			<p>Delete Account</p>
			<?php
				echo form_open('signin/delete');
				echo "Username: " . form_input('username', '') . "<div id='check'></div><br><br>";
				echo "Password: " . form_input('password', '') . "<br><br>";
				echo form_submit('submit', 'Delete Account');
				echo form_close();
			?>
		</div>
		</section>
	</div><!--Ends Column MD 6 Offset 3 Div-->
</div><!--Ends Row Div-->
	
</div>