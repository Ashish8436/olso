<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.g-axon.com/integral-3.0/classic/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2017 11:49:03 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Data Tables</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
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
<link href="<?= base_url('olso_admin_assets/plugins/datatables/css/jquery.dataTables.css');?>" rel="stylesheet">
<link href="<?= base_url('olso_admin_assets/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css');?>" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="<?= base_url('olso_admin_assets/js/html5shiv.min.js');?>"></script>
      <script src="<?= base_url('olso_admin_assets/js/respond.min.js');?>"></script>
<![endif]-->
<script src="<?= base_url('olso_admin_assets/js/jquery.min.js');?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


<!-- Page container -->
<div class="page-container">
<?php include('pages/header.php'); ?>
	 <!-- Main content -->
	 <div class="main-content">
			<h1 class="page-title">ID Verification</h1>
			<!-- Breadcrumb -->
			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover dataTables-example" >
									<thead>
										<tr>
											<th>No.</th>
											<th>Oauth Uid</th>
											<th>Name</th>
											
										</tr>
									</thead>
									<tbody>
										<?php $i=1; foreach ($fetch_id_Verify_vendors as $non_verify): ?>
											<tr class="gradeX">
												<td>
													<a href="<?= base_url('Admin-portal/ID-Verification-Details') ?>/<?php echo $non_verify->verification_id ?>/<?php echo $non_verify->oauth_uid ?>/<?php echo $non_verify->first_name ?> <?php echo $non_verify->last_name ?>">
														<?php echo $i;$i++; ?>
													</a>
												</td>
												<td>
													<a href="<?= base_url('Admin-portal/ID-Verification-Details') ?>/<?php echo $non_verify->verification_id ?>/<?php echo $non_verify->oauth_uid ?>/<?php echo $non_verify->first_name ?> <?php echo $non_verify->last_name ?>">
														<?php echo $non_verify->oauth_uid; ?>
													</a>
												</td>
												<td>
													<a href="<?= base_url('Admin-portal/ID-Verification-Details') ?>/<?php echo $non_verify->verification_id ?>/<?php echo $non_verify->oauth_uid ?>/<?php echo $non_verify->first_name ?> <?php echo $non_verify->last_name ?>">
													<?php echo $non_verify->first_name; ?> <?php echo $non_verify->last_name; ?>
													</a>
												</td>
												
											</tr>
										<?php endforeach ?>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Footer -->
			<footer class="footer-main"> 
				&copy; 2016 <strong>Integral</strong> Admin Template by <a target="_blank" href="#/">G-axon</a>
			</footer>	
			<!-- /footer -->
		
	  </div>
	  <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->

	
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/jquery.dataTables.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/jszip.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/pdfmake.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/vfs_fonts.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/extensions/Buttons/js/buttons.html5.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/extensions/Buttons/js/buttons.colVis.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/dataTables-script.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/js/loader.js');?>"></script>
</body>

<!-- Mirrored from www.g-axon.com/integral-3.0/classic/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2017 11:49:07 GMT -->
</html>
