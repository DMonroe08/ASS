<!DOCTYPE>
<html lang="en">
<head>
	<meta http-equiv="Content Type" content="text/html; charset=utf-8">
	<title>Recipe Recsue</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>"/>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<link href="<?php echo base_url('assets/fonts/PoiretOne-Regular.ttf')?>" rel="stylesheet"/>
	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="holder">
					<div class="row">
						<div class="col-md-12" id="sceme">
							<div class="page-header" ><h1 class="text-center">Recipe Rescue</h1></div>
						</div><!--Ends Column MD 8 Offset 2 Div-->
					</div><!--Ends Row Div-->
					<div class="row">
						<nav class="col-md-12">
								<!--Navigation-->
							<ul class="nav nav-pills nav-justified" role="nav">
								<div class="row">
								<div class="col-md-4"><div class="text-center"><li role="presentation" class="active"><a class="nav-button" href="<?php echo site_url() . '/Welcome/load';?>">Home</a></li></div></div>
								<div class="col-md-4"><div class="text-center"><li role="presentation"><a class="nav-button" href="<?php echo site_url() . '/signin/load';?>">Sign In</a></li></div></div>
								<div class="col-md-4"><div class="text-center"><li role="presentation"><a class="nav-button" href="<?php echo site_url() . '/signup/load';?>">Sign Up</a></li></div></div>
							</div>
							</ul>
						</nav>
					</div>