<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<style type="text/css">
	@font-face
	{
		font-family: Segoe UI;
		src:url('assets/segoeui.ttf');
	}
	.bdso2017
	{
		background-image: url('assets/images/2017 bdso.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		width: 100%;
		height: 100%;
	}
	.box
	{
		box-shadow: 10px 10px 5px #888888;
	}
	.center
	{
		left:50%;
		right: 50%;
	}
	h1 {
		font-family: Segoe UI;
		font-size: 24px;
		font-style: normal;
		font-variant: normal;
		font-weight: 500;
		line-height: 26.4px;
	}
	h3 {
		font-family: Segoe UI;
		font-size: 14px;
		font-style: normal;
		font-variant: normal;
		font-weight: 500;
		line-height: 15.4px;
	}
	p {
		font-family: Segoe UI;
		font-size: 14px;
		font-style: normal;
		font-variant: normal;
		font-weight: 400;
		line-height: 20px;
	}
	blockquote {
		font-family: Segoe UI;
		font-size: 21px;
		font-style: normal;
		font-variant: normal;
		font-weight: 400;
		line-height: 30px;
	}
	pre {
		font-family: Segoe UI;
		font-size: 13px;
		font-style: normal;
		font-variant: normal;
		font-weight: 400;
		line-height: 18.5667px;
	}
	.mobile
	{
		display: none;
	}
	@media only screen and (max-width: 768px)
	{
		.logo
		{
			display: none;
		}
		.mobile
		{
			display: inline;
		}
	}
	.follow
	{
		background-color: transparent;
	}
	.follow:hover
	{
		border-radius: 35%;
		background-color: #009ddc;
	}
	.fix
	{
		width: 1080px;
		margin: 0 auto;
	}
</style>
<head>
	<meta charset="utf-8">
	<title>BNEC Debate Scrabble Open - Beat Your Limit</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style.css">

	<!-- Partial CSS -->
	<?php
		if(isset($css)){
			include('/partial/'.$this->router->fetch_class().'/'.$content.'_css.php');
		}
	?>

	<!-- check user session -->
	<?php
		$session_id='';
		if($this->session->userdata('user_id') != null)
		{
			$session_id = $this->session->userdata('user_id');
		}
	?>

</head>
<body class="bdso2017 center" style="font-family: Segoe UI">
	<!-- Header -->
		<!-- Navbar -->
		<nav class="navbar navbar-default" style="background-color: transparent; margin-bottom: 0px; font-style: bold;">
		  <div class="container-fluid">
	        <!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header" style="margin-top: 0px;">
		      <button type="button" class="navbar-toggle collapsed mobile" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand mobile" style=""><img style="width: 80%; margin-top: -25%;" src="<?php echo base_url()?>assets/images/bdso-logo.png"></a>
		    </div>
		  	<!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse center" id="bs-example-navbar-collapse-1">
		    	<!-- Mobile Navbar -->
		    	<div class="mobile" align="center">
			    	<ul class="nav navbar-nav mobile">
			    		<li><a href="<?php echo base_url()?>home">Home</a></li>
			    		<li><a href="<?php echo base_url()?>registration">Register</a></li>
			    		<li><a href="<?php echo base_url()?>#">Accomodation</a></li>
			    		<li><a href="<?php echo base_url()?>about">About</a></li>
			    	</ul>
		    	</div>
		    	<!-- Desktop Navbar -->
		    	<div class="logo fix">
			    	<ul class="nav navbar-nav" style="margin-left: 10%;">
				        <li class="" style=""><a href="<?php echo base_url();?>home" style="font-size: 14px;;">Home</a></li>
			    	</ul>
			    	<ul class="nav navbar-nav" style="margin-left: 10%;">
				        <li class="" style="margin-left: 25%;"><a href="<?php echo base_url();?>registration" style="font-size: 14px;">Register</a></li>
				    </ul>
				    <ul class="nav navbar-nav logo" style="margin-left: 5%;">
				    	<li><a class="navbar-brand" href="#"><img style="height: 450%; margin-top: -20px; margin-left: 10%" src="<?php echo base_url();?>assets/images/bdso-logo.png"></a></li>
				    </ul>
					<ul class="nav navbar-nav" style="margin-left: 5%;">
				        <li class="" style="margin-right: 25%;"><a href="#" style="font-size: 14px; ">Accomodation</a></li>
			      	</ul>
			      	<ul class="nav navbar-nav" style="margin-left: 10%;">
				        <li class="" style=""><a href="<?php echo base_url();?>about" style="font-size: 14px;">About</a></li>
			      	</ul>
		      	</div>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<!-- Content -->
		<?php
			include($this->router->fetch_class().'/'.$content.'.php');
		?>

		<!-- Footer -->
		<div class="col-md-12" style="background-color: rgba(255,255,255,0.5); color: black; height: auto; bottom: 0;">
			<div class="col-md-6" style="margin-top: 0px;">
				<div align="center" class="col-md-8 col-md-offset-2">
					<h3 style="">Follow us</h3>
				</div>
				<div align="center" class="col-md-12">
					<a href="https://www.facebook.com/mybnec.org/"><img class="follow" style="width: 30px;" src="<?php echo base_url()?>assets/images/facebook bdso 2017.png"></a>
					<a href="https://www.instagram.com/binusenglishclub/"><img class="follow" style="width: 30px;" src="<?php echo base_url()?>assets/images/instagram bdso 2017.png"></a>
					<a href="https://www.youtube.com/channel/UCiKj5b1zQyWHkENyquAUfnA"><img class="follow" style="width: 30px;" src="<?php echo base_url()?>assets/images/youtube bdso 2017.png"></a>
				</div>
			</div>
			<div class="col-md-6">
				<center><h3>Contact us</h3></center>
				<div class="col-md-6 col-md-offset-2">
					<h4 style="color: #009ddc">Rifqi</h4>
					<h4>rifqi317</h4>
					<a href="tel:+6281275097531" style="color: black;"><h4>+6281275097531</h4></a>
				</div>
				<div class="col-md-4">
					<h4 style="color: #009ddc">Debby</h4>
					<h4>debbyllo</h4>
					<a href="tel:+628982771170" style="color: black;"><h4>+628982771170</h4></a>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-2">
				<h4>Organized by:</h4>
				<div class="col-md-12">
					<a href="http://www.mybnec.org"><img style="width: 200px;" src="<?php echo base_url()?>assets/images/BNEC.png"></a>
				</div>
			</div>
			<div class="col-md-6">
				<h4>Support by:</h4>
				<div class="col-md-12">
					<a href="http://www.binus.ac.id"><img style="width: 150px; padding-right: 2%;" src="<?php echo base_url()?>assets/images/logo binus.png"></a>
					<a href="http://www.indonesianscrabble.org"><img style="width: 200px;" src="<?php echo base_url()?>assets/images/isf.png"></a>
				</div>
			</div>
			<center><h5>© 2017 <a style="color: black;" href="http://www.mybnec.org">BINUS English Club</a> - <a style="color: black;" href="http://www.bdso.mybnec.org">The 2017 BNEC Debate Scrabble Open</a></h5></center>
		</div>

		<!-- Script -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/boiler/js/plugins.js"></script>
	    <script src="<?php echo base_url();?>assets/boiler/js/main.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Partial JS -->
		<?php
			if(isset($js)){
				include('/partial/'.$this->router->fetch_class().'/'.$content.'_js.php');
			}
		?>
</body>
</html>