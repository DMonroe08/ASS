<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
</head>
<body>
<h1>Recipe Rescue</h1>
<ul>
	<li><a class="signin" href="<?php echo index_page() . '/signin/load';?>">Sign In</a></li>
	<li><a class="signout" href="<?php echo index_page() . '/signup/load';?>">Sign up</a></li>
</ul>

<section>
	<button class="btn btn-default" type=""><a href="#">Breakfast</a></button>
	<button><a href="#">Lunch</a></button>
	<button><a href="#">Dinner</a></button>
	<button><a href="#">Dessert</a></button>
</section>





<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>