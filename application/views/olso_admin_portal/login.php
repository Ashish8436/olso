<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Login</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='<?= base_url('olso_admin_assets/logo/logo.png');?>' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="<?= base_url('olso_admin_assets/css/entypo.css');?>" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="<?= base_url('olso_admin_assets/css/font-awesome.min.css');?>" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?= base_url('olso_admin_assets/css/bootstrap.min.css');?>" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Integral core stylesheet -->
<link href="<?= base_url('olso_admin_assets/css/integral-core.css');?>" rel="stylesheet">
<!-- /integral core stylesheet -->

<link href="<?= base_url('olso_admin_assets/css/integral-forms.css');?>" rel="stylesheet">




</head>
<body class="login-page">

<!-- Loader Backdrop -->
	<div class="loader-backdrop">           
	  <!-- Loader -->
		<div class="loader">
			<div class="bounce-1"></div>
			<div class="bounce-2"></div>
		</div>
	  <!-- /loader -->
	</div>
<!-- loader backgrop -->

<div class="login-container">
	<div class="login-branding">
		<a href="index-2.html"><img src="<?= base_url(); ?>/olso_admin_assets/images/logo.png" alt="Integral" title="Integral"></a>
	</div>
	<div class="login-content">
		<?php
		  if($this->session->flashdata('error_msg')){
		?>
		  <div class="alert alert-danger">
			  <?php echo $this->session->flashdata('error_msg'); ?>
		  </div>

		<?php } else if($this->session->flashdata('success_msg'))  { ?>
		  <div class="alert alert-success">
			  <?php echo $this->session->flashdata('success_msg'); ?>
		  </div>
		<?php } ?>
		<h2><strong>Welcome</strong>, please login</h2>
		<form method="post" action="<?= base_url('Admin/login/try'); ?>">                        
			<div class="form-group">
				<input type="email" placeholder="xyz@gmail.com" name="admin_email" class="form-control" required="">
			</div>                        
			<div class="form-group">
				<input type="password" placeholder="**********" name="admin_password" class="form-control" required="">
			</div>
			<div class="form-group">
				 <div class="checkbox checkbox-replace">
					<input type="checkbox" id="remeber">
					<label for="remeber">Remeber me</label>
				  </div>
			 </div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary btn-block" value="Login">
			</div>
			<p class="text-center"><a href="forgot-password.html">Forgot your password?</a></p>                        
		</form>
	</div>
</div>

<!--Load JQuery-->
<script src="<?= base_url('olso_admin_assets/js/jquery.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/js/bootstrap.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/js/loader.js');?>"></script>

</body>

</html>
