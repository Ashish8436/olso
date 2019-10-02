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
			
			<div class="row" id="printableArea">
    			<div class="col-md-12">
       				<div class="panel panel-primary">
			            <div class="panel-heading">
							Person Details
						</div>
						<div class="panel-body" >
							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> Name &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<input type="text" name="token" class="form-control" value="<?php echo $verify_details->first_name ?> <?php echo $verify_details->last_name ?>"  readonly="">
								</div>
							</div>
							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> Login Provider &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<input type="text" name="token" class="form-control" value="<?php echo $verify_details->oauth_provider ?>"  readonly="" >
								</div>
							</div>
							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> Created &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<input type="text" name="token" class="form-control" value="<?php echo date('d M Y',strtotime($verify_details->created)) ?>"  readonly="">
								</div>
							</div>
							<?php if($verify_details->driving_license1!=''){ ?>
							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> Driving License &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<a href="<?= base_url() ?><?php echo $verify_details->driving_license1 ?>" class="form-control" style="color:red;font-weight: bold;" target="_blank">Front Side</a>
									<a href="<?= base_url() ?><?php echo $verify_details->driving_license2 ?>" class="form-control" style="color:red;font-weight: bold;" target="_blank">Back Side</a>
								</div>
							</div>
							<?php } ?>
							<div class="col-md-12 form-group pull-left">
            					<div class="input-group">
			  						 <a href="<?= base_url('Admin-portal/Id-Verify') ?>?veri_id=<?php echo $verify_details->verification_id?>" onclick="return confirm('Do you really want to Accept this Id?');" class="btn btn-success"><i class="fa fa-fw fa-check-circle-o"></i> Approve</a>&nbsp;
		                            <a href="#" class="btn btn-danger" id="cancel_id" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-times-circle-o"></i> Cancel</a>
		                            <input type="hidden" value="<?php echo $verify_details->verification_id ?>" id="veri_id">
								</div>
							</div>
						</div>
							
                        <br>
					</div>
				</div>
			</div>	

			<!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">
			    <form method="post" action="<?= base_url('Admin-portal/ID-Cancel') ?>">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          
			          <button type="button" class="close" data-dismiss="modal" style="font-size:44px;">&times;</button>
			          
			        </div>
			        
			        <div class="modal-body">
			          	<span id="output"></span>
			          	<div class="_1v8t1fb" style="font-weight:bold;font-size:20px;color:#6059EE;">Enter Cancel reason</div>
			          	<textarea class="form-control" name="cancel_reason" rows="5" placeholder="Cancel reason...." required></textarea><br>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
			        </div>
			    	
			      </div>
			      </form>
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
<script>
 $(document).ready(function(){
        $('#cancel_id').click(function(){
              var id = $.trim($("#veri_id").val());
              $('#output').html("<input type='hidden' name='veri_id' value="+id+">");
    });
  });
</script>
</body>

<!-- Mirrored from www.g-axon.com/integral-3.0/classic/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2017 11:49:07 GMT -->
</html>
